Door LLM's toegang te geven tot API's kunnen de antwoorden die LLM's geven meer feitelijk zijn en worden voorzien van bronvermeldingen.

ChatGPT biedt de mogelijkheid om [plugins](https://openai.com/blog/chatgpt-plugins) toe te voegen aan chats. De plugins zijn in wezen via [OpenAPI](https://www.openapis.org/) beschreven REST API's.

Voor het NDE Termennetwerk is er een eenvoudige [REST proxy](https://not-rest-proxy.coret.org/) gemaakt op de [GraphQL interface van het NDE Termennetwerk](https://termennetwerk-api.netwerkdigitaalerfgoed.nl/graphiql) en die is voorzien van een [OpenAPI beschrijving](https://not-rest-proxy.coret.org/openapi.yaml). 
In ChatGTP ziet dit er dan als volgt uit:

![Termennetwerk in ChatGPT demo](img/demo.gif)
