Feature/Functionality	Working as Expected
(Yes/No)	Comments
Registration	Yes	User can Register by entering their name, email, and password. All fields must be filled in otherwise system will not allow registration. After registration, user is redirected to the landing page and can access authenticated areas.
View Ongoing Auctions	Yes	User can view ongoing auctions where the start date is the current date or before that and only published lot items. Includes pagination (Previous and Next) for the saved records.
View Upcoming Auctions	Yes	User can view upcoming auctions where the start date is the after the current date and only published lot items. Includes pagination (Previous and Next) for the saved records.
Search Ongoing auctions	Yes	User can search lot items by name, price etc by typing the desired keywords in the search area. Returns the found items in the ongoing auctions if the search term matches the records. If no items match the search results, it displays the no results found message.
View Related Auction Lot Items	Yes	User can view related lot items at the lot item details page. It shows the related items from the same auction. All in order.
View Categories	Yes	All categories can be viewed from the categories page. User is able to see the category and the description. Includes pagination (Previous and Next) for the saved records.
View interesting products.	Yes	Items are displayed randomly in the categories page and references them as user’s interest. Working as intended.
View FAQs	Yes	User can view all the Frequently Asked Questions (FAQs) and the answers for them. Includes pagination (Previous and Next) for the saved records.
Newsletter/Bulletin/ Subscription	Partially	By entering the email when user submits the form, it displays a success page. However, no data is being stored in the database. It can be implemented in future if requested.
Logged In as User/Admin
Login, Log out	Yes	Redirected to the home page after login with correct credentials. Username is displayed on the navigation bar.
Account Management	Yes	Account details such as name, email, password can be changed and updated. If the user wants to delete the account permanently, it is done by clicking on the delete button.
Enable two factor authentication	Yes	System can generate two factor authentication by displaying QR code which should be scanned by the phone’s authenticator application such as Google Authenticator, Microsoft Authenticator pr similar applications. User is required to enter the code on next login. If incorrect code is entered, login is denied. Alternatively, recovery codes are generated which are also changeable randomly. These recovery codes should be stored safely in a password manager tool and user can login by entering them.
Manage and log active sessions on other browsers and devices.	Yes	If necessary, user may log out of all of the other browser sessions across all of the devices. If there is any other sessions, 
Permission	Yes	Login if invalid details are entered. Error messages are displayed indicating user to enter the correct credentials.
Admin
Access	Yes	Admin dashboard can be accessed by clicking the ‘Dashboard’ button from navigation bar after login with the admin login details.
View admin dashboard	Yes	Admin is able to view the admin dashboard area. Welcome message is displayed with the user’s name. Admin can view the total numbers of categories, bids, total lots, total member application and users. 
Manage Category
Add, View, Edit, Delete	Yes	Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
Validation	Yes	Validation working in order if any fields are missing.
Search Category	Yes	Category is searchable. If no results found, displays message that record not found.
Manage Auction		
Add, View, Edit, Delete	Yes	Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
Validation	Yes	Validation working in order if any fields are missing.
Search Auction	Yes	Auction is searchable. If no results found, displays message that record not found.
		
Manage Lot Items
Assign Auction	Yes	Any auction can be assigned to lot item.
Assign Category	Yes	Any category can be assigned to lot item.
Add, View, Edit, Delete	Yes	Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
Upload image/Images	Yes	Multiple images can be uploaded.
Validation	Yes	Validations are working in order if any fields are missing.
•	Start Date cannot be after yesterday and end date must be after the current date. 
•	All the fields must be filled up except ‘Additional Information’.
•	Must upload image for thumbnail and at least one image from the multiple image upload area.

Change status (Publish/Archive)	Yes	Lot item status can be selected as published to display on the auction page. 
If item is selected to be archived, it is not displayed to the auctioneers. 
Search Lot Items	Yes	Lot Item is searchable. If no results found, displays message that record not found. Additionally, to search published lot items, type 1 in the search area and for archived after typing 0, it displays the archived items.

However, if searched for archived items, items are not displayed in order as it supposed to show the archived items first.
Manage FAQs (Frequently Asked Questions)
Add, View, Edit, Delete	Yes	Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
User Management
View, update, delete	Yes	•	User details can be viewed.
•	User role can be updated to user or admin.
•	Admin can delete user.
•	Includes pagination (Previous and Next) for the saved records.
Search User	Yes	Admin can search user by id, name, role, and email.
Booking Management
View, update, delete	Yes	•	Booking details can be viewed.
•	Booking status can be updated to approved or pending
•	Admin can delete booking.
•	Includes pagination (Previous and Next) for the saved records.

Search Booking	Yes	•	Admin can search booking by booking no., user id and reason.
Bid Management
View, update, delete	Yes	•	Bid details can be viewed.
•	Bid status can be updated to winner or not winner.
•	Admin can delete bid.
•	Includes pagination (Previous and Next) for the saved records.

Search Bid	Yes	Admin can search bid by 
User Reference Number,
Lot Reference or
Bidding amount
Application Management
View, update, delete	Yes	•	Application details can be viewed.
•	Application status can be updated to approved or pending
•	Admin can delete application.
•	Includes pagination (Previous and Next) for the saved records.

Search Application	Yes	Admin can search application by application no., application type, contact details or by status (pending or approved). 
User (Authenticated)
Access	Yes	User dashboard can be accessed by clicking the ‘User Dashboard’ button from navigation bar after login with the admin login details. This only has the basic details about the user such as name, user, and email. The user must be logged in.
Apply Membership	Yes	User can apply for membership from ‘Membership’ page. User must fill all the necessary documents. All validations are working as expected. Supports image upload and works as intended. However, user can apply multiple times. After successful completion it is showing the success page.
Make a Booking	Yes	User can a make a booking with the reason provided description along with other details. Input validations are working well without any errors. Upon successful submission, success page is displayed. 
Place a bid	Yes	User can a place a bid on a specific lot item. Bid amount can only take numeric values. All in order.

Mobile Version	Yes	All the pages are responsive and user-friendly in smaller devices such as mobile, tablets etc.
