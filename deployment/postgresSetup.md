### Setup
- Download and Install postress
- Open main app setting.py of django project to update database connection
  ```
  DATABASES = {
      "default": env.dj_db_url("DATABASE_URL") 
  }
  ```
- Open .env to add postgres database path
  ```
  DATABASE_URL=postgres://postgres:myPasswor123@localhost:5432/myprojectdb
  ```
- Open PSQL Shell login to postgress with valid credentials
  ```
  CREATE DATABASE myprojectdb;

  ```
- Go to .venv of the django project root directory
  ```
  pip list
  pip show psycopg2-binary
  pip install psycopg2-binary
  python manage.py migrate
  python manage.py createsuperuser

  ```
- Now the migrations will be stored in postgres db instead of sqlite
- Confirm that postgress contains data after migration
  ```
  \l
  \list
  \c myprojectdb
  \dt
  
  ```
  
