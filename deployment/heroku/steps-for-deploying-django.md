#  Follow these steps when deploying a Django project to Heroku.

**It highlights the two main sections — local configuration files and Heroku CLI commands — feeding into production deployment and monitoring.**

---

## 🛠️ Local Configuration Files
- **.gitignore** → Exclude virtual environments, `.env`, SQLite DB, caches.  
- **.env** → Store secrets (`SECRET_KEY`, `DEBUG`, `DATABASE_URL`).  
- **requirements.txt** → List dependencies (Django, Gunicorn, Whitenoise, psycopg2, etc.).  
- **Procfile** → Define process type (`web: gunicorn django_project.wsgi`).
  ```
    web: gunicorn django_project.wsgi --log-file -
  ``` 
- **runtime.txt** → Specify Python version (e.g., `python-3.12.2`).
  ```
    python-3.12.2
  ```

---

## ⚙️ Heroku Deployment Steps
- **Login** → Authenticate CLI session.  
- **Create App** → Provision app container (`vema-blog-api`).  
- **Add PostgreSQL** → Attach production database.  
- **Set Config Vars** → Secure environment variables.  
- **Push Code** → Deploy via `git push heroku main`.  
- **Scale Dynos** → Ensure at least one web dyno is running.  
- **Migrate & Superuser** → Apply migrations and create admin user.  
- **Monitor Logs** → Debug runtime issues.  
- **View Info** → Inspect app metadata and status.  

```
heroku login
heroku create vema-blog-api
heroku addons:create heroku-postgresql:essential-0 -a vema-blog-api
heroku addons:info postgresql-polished-67797
heroku config:set SECRET_KEY="XXXXXXXXXXXXXX"
git push heroku main
heroku ps:scale web=1
heroku run python manage.py migrate
heroku run python manage.py createsuperuser
heroku logs --tail -a vema-blog-api
heroku info -a vema-blog-api
```
---

## 🌟 Key Insight
- **Configuration files** prepare your project for production.  
- **Heroku commands** handle deployment, scaling, and monitoring.  
- Together, they form a **pipeline from local setup → deployment → production monitoring**.  

---


