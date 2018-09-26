# shesafe-woman-safety-webapp
### Done By
- Rhythm Girdhar (ridhigirdhar3@gmail.com)
- Rohan Mohapatra (rohan.ron14@gmail.com)

### Approach:
- - - -
We started the Application development with the basic User Interface for the main index
page (Front-end using HTML, CSS, JavaScript and Bootstrap). This page contained the quick
registration form which allowed any new user to create an account and register herself for it.
It had the navigation bar which also allowed the user to Log into her existing account. We
used PHP and MySQL framework for the back-end in order to store all the personal
information that the user puts into the form.
After logging in, the user can use any of the two services provided by us:

* The Dashboard: It is platform to help the girls in emergency situations. It has the
following features:

  * Uses Google Cloud API to access the user’s current location. API key for the
  given project in the account is added into the Navigator.Geolocation function in
  order to get the current latitude and longitude access continuously.
  * Ola Application API is embedded into the Dashboard to make Quick Cab requests
  from that location. We used the OlaCDN to connect to Ola Services and request
  for the Cab.
  * Uber Application API: Similar to Ola, it allows the user to book cabs
  immediately, after logging into it. Uber API link can be obtained by making an
  Uber Developer Account, followed by answering a few client link questions to get
  the suitable Deeplink for the service.
  * RedBus application link for Quick Booking of the buses.
  * Mybmtc.in website link in order to check the bus timings all over Bangalore.
  * BMTC app link for the users (which have the app) to make the searching process
  faster.
  * Whatsapp emergency contact API- It provides the service of quick message
  sending to the emergency contact numbers, with a given default message.
  * Emergency numbers- There is a list of some emergency contact numbers which
  can be dialled immediately by clicking on them.
* Forum: Used PHP and MySQL to store and simulate categories and topics for the
given discussion platform. People can share their thoughts and experiences
anonymously.


### Further approach:
- - - -
1. Local Language Implementation using Google Translate API and native language
coding.
2. Working on Security issues (Privacy and vulnerabilities).
