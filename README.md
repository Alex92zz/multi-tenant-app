# Laravel and Filament PHP Software-as-a-Service (Saas) Project

This a unfinished Laravel Software-as-a-Service (Saas) project which would create websites in seconds using artificial intelligence (AI) and a set of prebuilt templates (10 - 20). 
The goal was to build very simple websites quickly, build them for free but charge hosting £100/year. 
Please bear in mind that the project is unfinished. I build functionality to create/edit pages, add content or multiple sections and functionality to show different website depending on domain name accessing the app. I also added role-based access control using Laravel and Spatie Permissions but it's not finalised. 

## Home Page Controller Code Review 
Multiple domains would point to the same application. The app would check the domain name, and depending on the domain name it will get the theme and database data for that particular domain/website. 
![home-page-controller](https://github.com/user-attachments/assets/5964c9c9-1103-403a-9cce-fb6fa2adaf5f)

### 1. Getting Host (domain name) 
### 2. Getting Website Data
Based on domain name accessing the app it is getting all the data from the database for that website. This section needs improvement. 
### 3. Returning View
The app returns the view based on the theme linked to the domain and also sends all the data of the website using compact(); Every domain will have a theme linked to it. The theme MUST be have exact name as the folder. 
### 4. Theme Folder 
As you can see I added two website theme's in the project, each having folder structure exactly the same. All themes MUST have the same structure, including in the components folder, all files need to have the same name. 

## Admin Panel Managing Themes and Domains
Image showing a domain name linked to a theme, in this case theme index-classic linked to 4 domains and theme name have exact name as theme folders in previous image.

![themes-linked-to-domain-names](https://github.com/user-attachments/assets/17d252f2-7e16-422b-8a61-6ad2bee02a86)

I haven't had time to do it yet but it needs to link Users to domain names, this way each domain name has a theme and a user and each user will see his own data linked to the website he owns. 


## Editing Home Page From Admin Panel
This admin panel page could be improved to look better but the basic functionality is there. Users can add or delete multiple sections from the website. Image looks blurry because I resize it from 5000 pixels to 1000 pixels. Editing the other pages would function in similar way. 

![Home-Page-Blocks-Page-Multi-Tenant-App-01-09-2025_12_20_PM (1)](https://github.com/user-attachments/assets/4cb56928-0d36-4667-aae6-a7c941f3158a)
    

## Adding AI to create content
Another feature which is missing is adding feature which uses ChatGPT which only admins will have access to, to create basic content for the website, later individual users can modify it. Admin will provide basic information regarding the business and using API first will get the title for home page, then description, then h1 and so on... Admin will only give one detailed description and AI will do the rest. Even create images which later users or admin can change it. Users will see only their own data and website. 
