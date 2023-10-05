## Sending an Email via API

To send an email through the API, make a POST request to the following endpoint:

**Endpoint:** `{{baseUrl}}/api/send-email`

### Request Body

The request body should be in JSON format and include the following parameters:

-   `receiver` (required): An object containing the recipient's information.

    -   `receiver_email` (required): The recipient's email address.

-   `sender` (optional): An object containing the sender's information.

    -   `sender_email` (optional): The sender's email address.
    -   `sender_name` (optional): The sender's name.

-   `subject` (required): The subject of the email.

-   `body` (required): The body of the email.

### Example Request Body

```json
{
    "receiver": {
        "receiver_email": "recipient@example.com"
    },
    "sender": {
        "sender_email": "sender@example.com",
        "sender_name": "John Doe"
    },
    "subject": "Hello, World!",
    "body": "This is the content of the email."
}
```
