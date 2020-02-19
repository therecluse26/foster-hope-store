# Foster Hope Project Store
"Store" app for Foster Hope Project, allowing parents to build bags and check them out

## Functionality / Components Wanted:
- Shopping cart (filled with bags)
- Bags (filled with a fixed number of items, divided by item type)
  - Validate item selections based on preset rules from bag attributes
    - Example: a bag for a female toddler could have a max of 3 shirts, 3 pants, 2 packs of diapers, 1 comfort item and 1 Bible
  
- Item detail
- Item list with search and filters

### Item Types
- Bag
  - Attributes
    - Child's Gender
    - Child's age
    - Child's size
  - Notes
    - Use bag attributes to automatically filter item list and only include relevant items for them to select
    - Include age/size appropriate undergarments / packs of socks in bag by default
    - Include toiletries by default
    
- Clothing items
  - Attributes
    - Item type (shirt, pants, etc)
    - Gender (inherit from bag)
    - Size (inherit from bag)
    - Target age (inherit from bag)
    - Condition
    - Photo
    - Available (remove from list if not)
    
- Comfort items
  - Attributes
    - Target age (inherit from bag)
    - Gender (inherit from bag)
    - Description
    - Photo

- Bibles
  - Attributes
    - Target age (inherit from bag)
    - Translation
    - Photo
    - Included (default to yes, use tiny opt-out checkbox somewhere on the page)


### User Profile Validation
Track user information to verify that people aren't taking advantage of the system

See if it's possible (legal) to collect the following data from parents:
    - Foster certification number (or whatever this is called)
    - Photo ID
    - Email / other contact info
    - Certification last renewed date (figure out how to verify this automatically)
    - Certification expiry date
    - Foster children
      - Names
      - Ages (date of birth)
      - Genders
      - Clothing sizes
      - Some kind of state or county ID for foster care