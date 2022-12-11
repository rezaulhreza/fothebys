# Auction Management System

#### Please note, the database schema here is not quite ok. Because in an auction a lot will have many auctions, the Lot should be the base Model when creating an auction or lot items. for instance:

###### A lot can have many Auctions. Auctions can have many Items. An auction should be created from a lot.


#### Due to tight time schedule unit test could not be generated, however, I strongly recommend to have the tests written before developing.


## Feature/Functionality

- UI: Tailwind CSS, Bootstrap

- Laravel Livewire

-Different layout and dashboard for normal user and registered user. Also, Admin dashboard is beautifully done.

- Registration: User can Register by entering their name, email, and password. All fields must be filled in otherwise system will not allow registration. After registration, user is redirected to the landing page and can access authenticated areas.
- View Ongoing Auctions: User can view ongoing auctions where the start date is the current date or before that and only published lot items. Includes pagination (Previous and Next) for the saved records.
- View Upcoming Auctions: User can view upcoming auctions where the start date is the after the current date and only published lot items. Includes pagination (Previous and Next) for the saved records.
- Search Ongoing auctions: User can search lot items by name, price etc by typing the desired keywords in the search area. Returns the found items in the ongoing auctions if the search term matches the records. If no items match the search results, it displays the no results found message.
- View Related Auction Lot Items: User can view related lot items at the lot item details page. It shows the related items from the same auction. All in order.
- View Categories: All categories can be viewed from the categories page. User is able to see the category and the description. Includes pagination (Previous and Next) for the saved records.
- View interesting products: Items are displayed randomly in the categories page and references them as user’s interest. Working as intended.
- View FAQs: User can view all the Frequently Asked Questions (FAQs) and the answers for them. Includes pagination (Previous and Next) for the saved records.
- Newsletter/Bulletin/ Subscription: By entering the email when user submits the form, it displays a success page. However, no data is being stored in the database. It can be implemented in future if requested.
- Login, Log out: Redirected to the home page after login with correct credentials. Username is displayed on the navigation bar.
- Account Management: Account details such as name, email, password can be changed and updated. If the user wants to delete the account permanently, it is done by clicking on the delete button.
- Enable two factor authentication: System can generate two factor authentication by displaying QR code which should be scanned by the phone’s authenticator application such as Google Authenticator, Microsoft Authenticator pr similar applications. User is required to enter the code on next login. If incorrect code is entered, login is denied. Alternatively, recovery codes are generated which are also changeable randomly. These recovery codes should be stored safely in a password manager tool and user can login by entering them.
- Manage and log active sessions on other browsers and devices: If necessary, user may log out of all of the other browser sessions across all of the devices. If there is any other sessions,
- Permission: Login if invalid details are entered. Error messages are displayed indicating user to enter the correct credentials.
- Admin Access: Admin dashboard can be accessed by clicking the ‘Dashboard’ button from navigation bar after login with the admin login details.
- View admin dashboard: Admin is able to view the admin dashboard area. Welcome message is displayed with the user’s name. Admin can view the total numbers of categories, bids, total lots, total member application and users.
- Manage Category:
  - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
  - Validation: Validation working in order if any fields are missing.
  - Search Category: Category is searchable. If no results found, displays message that record not found.
- Manage Auction:
  - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
  - Validation: Validation working in order if any fields are missing.
  - Search Auction: Auction is searchable. If no results found, displays message that record not found.
  - Manage Lot Items:
    - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
    - Validation: Validation working in order if any fields are missing.
    - Search Lot Items: Lot items are searchable. If no results found, displays message that record not found.
    - Manage Bids:
      - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
      - Validation: Validation working in order if any fields are missing.
      - Search Bids: Bids are searchable. If no results found, displays message that record not found.
- Manage User:
  - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
  - Validation: Validation working in order if any fields are missing.
  - Search User: User is searchable. If no results found, displays message that record not found.
- Manage Members:
  - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
  - Validation: Validation working in order if any fields are missing.
  - Search Member: Member is searchable. If no results found, displays message that record not found.
- Manage- Manage Pages:
  - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
  - Validation: Validation working in order if any fields are missing.
  - Search Page: Page is searchable. If no results found, displays message that record not found.
- Manage Newsletters:
  - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
  - Validation: Validation working in order if any fields are missing.
  - Search Newsletter: Newsletter is searchable. If no results found, displays message that record not found.
- Manage FAQs:
  - Add, View, Edit, Delete: Create, read, update, delete- all functionalities working. Includes pagination (Previous and Next) for the saved records.
  - Search FAQ: FAQ is searchable. If no results found, displays message that record not found.

and few other things