1. Once you have extracted the contents of this folder, copy the inner folder(the one that has folders called application, armory, system, etc) into htdocs/ or www/or DOC_ROOT/ and rename it to kamoo. When you access this application, make sure the url is localhost/kamoo and not localhost/kamoo/kamoo. I repeat, url is localhost/kamoo and not localhost/kamoo/kamoo

2. Create a database called campusMaps

3. Import the campusMaps.sql data into the database using phpMyadmin

4. Remove the picture from armory/photos/brigs.jpg and replace with your own picture, but having the same name (brigs.jpg)

5. open localhost/kamoo in your browser. If it does not work properly, delete the .htaccess file from kamoo/.htaccess

6. delete all the data from the maps table in campusmaps database. You can use phpmyadmin to easily do this

7. open use/places.csv in excel

8. open http://www.mapcoordinates.net/en in your browser. In location search box in the map type JKUAT Institution, Juja, Kenia. You can now zoom in to get the coordinates of points in JKUAT. Add these coordinates to the csv file you opened in step 7 above. Remember to user an underscore instead of spaces in the location names eg Gate_A instead of Gate A.

9. When you have enough locations, go to php my admin and open the maps table. Import the csv file use/places.csv

10. That's all. You can login using email:test@test.com and password: test@test.com Please note that you will require an internet connection to load the maps
