<?php

namespace App\Filament\Widgets;

use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;
use Cheesegrits\FilamentGoogleMaps\Actions\GoToAction;
use Cheesegrits\FilamentGoogleMaps\Actions\RadiusAction;
use Cheesegrits\FilamentGoogleMaps\Filters\MapIsFilter;
use Cheesegrits\FilamentGoogleMaps\Filters\RadiusFilter;
use Cheesegrits\FilamentGoogleMaps\Widgets\MapTableWidget;
use Cheesegrits\FilamentGoogleMaps\Columns\MapColumn;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class LocationMapTableWidget extends MapTableWidget
{

	use HasWidgetShield;
	protected static ?string $heading = 'Task Map';

	protected static ?int $sort = 1;

	protected static ?string $pollingInterval = null;

	protected int | string | array $columnSpan = 'full';

	protected static ?bool $clustering = false;

	protected static ?string $mapId = 'incidents';

	protected function getTableQuery(): Builder
	{
		return \App\Models\Task::query()->latest();
	}

	// Add this method if you want to control visibility based on permissions
	protected function getViewData(): array
	{
		return [
			'canView' => auth()->user()->can('view location map table widget'), // Ensure the permission exists and is assigned
		];
	}

	protected function getTableColumns(): array
	{
		return [
			ImageColumn::make('user.image_url')
				->label('Avatar')
				->size(40)
				->circular(),
			TextColumn::make('user.name')
			->searchable()
			->label('Assigned To'),
			TextColumn::make('state.name'),
			TextColumn::make('description'),
			TextColumn::make('status')
				->badge()
				->icon(fn(string $state): string => match ($state) {
					'sent' => 'heroicon-m-document-check',
					'accepted' => 'heroicon-o-clock',
					'in_progress' => 'heroicon-o-clock',
					'completed' => 'heroicon-c-check-circle',
					'rejected' => 'heroicon-o-x-circle',
				})
				->color(fn(string $state): string => match ($state) {
					'sent' => 'gray',
					'accepted' => 'warning',
					'in_progress' => 'info',
					'completed' => 'success',
					'rejected' => 'danger',
				}),
			TextColumn::make('lat'),
			TextColumn::make('lng'),

			MapColumn::make('location')
				->extraImgAttributes(
					fn($record): array => ['title' => $record->lat . ',' . $record->lng]
				)
				->height('80')
				->width('80')
				->type('hybrid')
				->zoom(8),
		];
	}

	protected function getTableFilters(): array
	{
		return [
			RadiusFilter::make('location')
				->section('Radius Filter')
				->selectUnit(),
			SelectFilter::make('user_id')->relationship('user', 'name'),
			SelectFilter::make('status')
				->options([
					'sent' => 'Sent',
					'accepted' => 'Accepted',
					'rejected' => 'Rejected',
					'in_progress' => 'In Progress',
					'completed' => 'Completed',
				]),
			MapIsFilter::make('map'),
		];
	}

	protected function getTableActions(): array
	{
		return [
			Tables\Actions\ViewAction::make(),
			Tables\Actions\EditAction::make(),
			GoToAction::make()
				->zoom(14),
			RadiusAction::make(),
		];
	}

	protected function getData(): array
	{
		$locations = $this->getRecords();

		$data = [];

		foreach ($locations as $location) {
			$data[] = [
				'location' => [
					'lat' => $location->lat ? round(floatval($location->lat), static::$precision) : 0,
					'lng' => $location->lng ? round(floatval($location->lng), static::$precision) : 0,
				],
				'id' => $location->id,
			];
		}

		return $data;
	}
}
