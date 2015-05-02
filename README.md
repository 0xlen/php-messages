Message project
===

### Configuration
	(1) .htaccess.example
	(2) application/config/database.php.example

### Database settings
1. application/config/database.php
2. access http://example.com/messages/migrate/up to import database
3. http://example.com/messages/migrate/rollback/**0**
	(last number is version you want to rollback)
4. http://example.com/messages/migrate/test/add to add test messages
    (http://example.com/messages/migrate/test/del to empty all message data)
