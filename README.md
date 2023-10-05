## Sending an Email via API

To send an email through the API, make a POST request to the following endpoint:

**Endpoint:** `{{baseUrl}}/api/send-email`

### Request Body

The request body should be in JSON format and include the following parameters:

-   `receiver` (required): Valid Email containing the recipient's information.

-   `sender` (optional): A valid Email containing the sender's information.

-   `sender_name` (optional): A string containing the sender's information.

-   `subject` (required): The subject of the email.

-   `body` (required): The body of the email.

### Example Request Body

```json
{
    "receiver": "recipient@example.com",
    "sender": "sender@example.com",
    "sender_name": "John Doe",
    "subject": "Hello, World!",
    "body": "<h1>This is the content of the email.<h1/>"
}
```
