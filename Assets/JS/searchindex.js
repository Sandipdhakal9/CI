// search index for WYSIWYG Web Builder
var database_length = 0;

function SearchPage(url, title, keywords, description)
{
   this.url = url;
   this.title = title;
   this.keywords = keywords;
   this.description = description;
   return this;
}

function SearchDatabase()
{
   database_length = 0;
   this[database_length++] = new SearchPage("index.html", "TransportFare", "transportfare welcome to transport fare nepal here you will find any kind of information related with vehicles and its inside the routes home sign nbsp up login features about us ", "");
   this[database_length++] = new SearchPage("login.html", "Login", "login user name password remember me forgot your password? email admin new to transport fare nepal? ", "");
   this[database_length++] = new SearchPage("signUp.html", "Sign Up", "sign up first name last username email password confirm register on transport fare nepal already have an account? ", "");
   this[database_length++] = new SearchPage("dashboard.html", "Dashboard", "dashboard welcome username dear user please choose provided options below ", "");
   this[database_length++] = new SearchPage("updateProfile.html", "Update User Profile", "update user profile first name last email password confirm username ", "");
   this[database_length++] = new SearchPage("fare_info.html", "Fare Information", "fare information select vehicle normal fares name student ", "");
   this[database_length++] = new SearchPage("search.html", "Search Info", "search info enter vehicle name ", "");
   this[database_length++] = new SearchPage("route_info.html", "Route Information", "route information vehicle name routes ", "");
   this[database_length++] = new SearchPage("vehicle_schedule.html", "Vehicle Schedule", "vehicle schedule information name departure time arrival date today station ", "");
   this[database_length++] = new SearchPage("rent_vehicle.html", "Rent Vehicle", "rent vehicle here make call type owner name identity no phone num ", "");
   this[database_length++] = new SearchPage("news_updates.html", "News And Updates", "news and updates info voli dheki terai limbuwan banda gosana vayeko cha ra yo sabai area ma effective huney chaina pradesh no protesters dherai vako matra hola kathmandu lagayat ko hoena ", "");
   this[database_length++] = new SearchPage("admin_dashboard.html", "Admin Dashboard", "admin dashboard welcome username hello what do you want to do? vehicle info owner route schedule station fare ", "");
   this[database_length++] = new SearchPage("add_vehicle.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("update_vehicle.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("delete_vehicle.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("add_fare.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("update_fare.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("delete_fare.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("add_owner.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("update_owner.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("delete_owner.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("add_vehicle_schedule.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("update_vehicle_schedule.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("delete_vehicle_schedule.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("add_vehicle_station.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("Update_vehicle_station.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("delete_vehicle_station.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("add_vehicle_route.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("update_vehicle_route.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("delete_vehicle_route.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("add_news_update.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("update_news_update.html", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("delete_news_update.html", "Untitled Page", "untitled page ", "");
   return this;
}
