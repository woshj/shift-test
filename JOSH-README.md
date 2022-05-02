# Josh Wainwright - Laravel Test
---
## Setup
To begin with you'll need to create a token to test the authentication
POST | `api/v1/create-token`

Here's a json object to use when creating a new token:
`{
    "name": "Tester",
    "email": "tester@shift.co.uk",
    "password": "pword1234"
}`

Next add an accept header to the request to fix a `'Route [login] not defined'` error when testing the private api routes:
`accept: application/json`

I've included the dummy data I was testing with in a file called `dummy_data.sql`

## API Routes
### Public
- POST | `api/v1/create-token`
- GET | `api/v1/office`
- GET | `api/v1/employee`
- GET | `api/v1/job-title`

### Private
- PUT | `api/v1/office/{id}`
- PUT | `api/v1/employee/{id}`
- PUT | `api/v1/job-title/{id}`

## Notes
I hope I didn't misunderstand the test, it felt simple enough so I'm worried I missed something. Maybe I was supposed to spend more time fleshing it out into a more real world application. Either way, if I were to make improvements to this, I would setup the CREATE and DELETE methods for each data type. I would include a front end register and login form alongside the relevant forms needed to CRUD the data types, these forms would allow the users to specify the relations between datatypes in a more human readable way as opposed to linking by ID. Furthermore I would setup validation, as I did in the auth controller, across all the other data types.

I hope whoever is testing this had a great bank holiday weekend. I appreciate the time spent checking it over. Any feedback will be greatly appreciated regardless of the outcome.
