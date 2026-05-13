# API endpoints:
Here’s a full list of your API endpoints in the format you asked for, based on your **blog app urls.py** and router setup. All of these are prefixed under `/api/`:

---

## 🔑 Authentication
- `https://ikhlabackend.deploy.tz/api/login/`  
- `https://ikhlabackend.deploy.tz/api/token/refresh/`

---

## 👤 User Utilities
- `https://ikhlabackend.deploy.tz/api/users/`  
- `https://ikhlabackend.deploy.tz/api/users/me/`  
- `https://ikhlabackend.deploy.tz/api/users/change-password/`  
- `https://ikhlabackend.deploy.tz/api/users/<id>/reset-password/`

---

## 🏠 Home Page
- `https://ikhlabackend.deploy.tz/api/carousels/`  
- `https://ikhlabackend.deploy.tz/api/departments/`  
- `https://ikhlabackend.deploy.tz/api/principal-messages/`

---

## 🎉 Events
- `https://ikhlabackend.deploy.tz/api/event-categories/`  
- `https://ikhlabackend.deploy.tz/api/events/`  
- `https://ikhlabackend.deploy.tz/api/enrollments/`

---

## 📖 About Us
- `https://ikhlabackend.deploy.tz/api/aboutus/`  
- `https://ikhlabackend.deploy.tz/api/objectives/`

---

## 🌍 Community Voices
- `https://ikhlabackend.deploy.tz/api/programs/`  
- `https://ikhlabackend.deploy.tz/api/testimonials/`

---

## 📅 Calendar
- `https://ikhlabackend.deploy.tz/api/calendar/`

---

## 📷 Resources
- `https://ikhlabackend.deploy.tz/api/photos/`  
- `https://ikhlabackend.deploy.tz/api/videos/`  
- `https://ikhlabackend.deploy.tz/api/faqs/`

---

## 📬 Contact
- `https://ikhlabackend.deploy.tz/api/contacts/`  
- `https://ikhlabackend.deploy.tz/api/messages/`  
- `https://ikhlabackend.deploy.tz/api/contributions/`

---

## 📚 Notes
- All endpoints support **CRUD** operations depending on role permissions (SuperAdmin, Admin, Translator).  
- Endpoints like `/users/me/` and `/users/change-password/` are **custom utilities** outside the router.  
- Swagger docs are available at:  
  - `http://127.0.0.1:8000/swagger/`  
  - `http://127.0.0.1:8000/redoc/`

---

👉 With this list, you can now test each endpoint via **Swagger**, **Postman**, or **cURL**.  

Would you like me to prepare a **step‑by‑step Postman collection** (login → create event → enroll student → add testimonial → verify permissions) so you can validate the whole flow quickly?
