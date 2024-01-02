```mermaid
sequenceDiagram
    participant browser
    participant server

    

    

    box->>clicked: when pressed save sends data to server for adding new note
    activate server
    save-->>browser: new note can be seen
    deactivate server

    browser->>server: GET https://studies.cs.helsinki.fi/exampleapp/data.json
    activate server
    server-->>browser: [{ "content": "HTML is easy", "date": "2023-1-1" }, ... ]
    deactivate server
```