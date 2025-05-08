# LARAGIG 

![Laragig Logo](/public/images/logo.png "Laragig Platform Logo")

A simple platform for browsing company job listings. Find your next opportunity here!

## Setup Instructions

1. Create a copy of the **.env.example** file and rename it to **.env**
2. Edit the **.env** file with your preferred settings
3. Give the initialization script execution permission:
   ```
   chmod +x ./initialize_working.sh
   ```
4. Run the script to:
   - Update and install Composer dependencies
   - Run database migrations
   - Generate application key
   - Create symbolic links
   - Start local hosting

The hosting configuration is based on what you set in:
```
START_HOSTING_ON_CLOUD=
```
within your **.env** file.

**Note:** This process works smoothly on Debian-based operating systems, but Windows and macOS users can use it too!

Happy job hunting!
