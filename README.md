# laravel_received_email_jobs

Tutorial Instalasi
1. Create new project in local computer
2. Create jobs file: php artisan make:job JobsSendQueueEmail --queued
3. Clone this project
4. Copy file in app/Jobs/JobsSendQueueEmail.php
5. Copy file in app/Mail/TestingMail.php
6. Copy file in resources/views/welcome.blade.php
7. run php artisan queue:work

Note:
1. the program will delay 30 second for automatically send email.
2. the program will receive data from the laravel_sender_email_jobs (https://github.com/rachmathidayatdev/laravel_sender_email_jobs)
