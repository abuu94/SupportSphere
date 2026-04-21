## Setup

- Create account in docker
- Download and Install locally
   ```
   docker--version
   docker run hello-world
   docker run-it ubuntu bash
   docker info
   ```

- Build simple django project for dockerizing
```
# Windows
$ mkdir code
$ cd code
$ mkdir ch2-hello
$ cd ch2-hello
$ python-m venv .venv
$ Set-ExecutionPolicy-ExecutionPolicy RemoteSigned-Scope CurrentUser
$ .venv\Scripts\Activate.ps1
(.venv) $
(.venv) $ python-m pip install django~=4.0.0
(.venv) $ python-m pip install--upgrade pip
(.venv) $ django-admin startproject django_project .
(.venv) $ python manage.py migrate
(.venv) $ python manage.py runserver
(.venv) $ python manage.py startapp pages
```

- Create Dockerfile and .dockerignore then run commands
  ```
  docker build .
  ```
