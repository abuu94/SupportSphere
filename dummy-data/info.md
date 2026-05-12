# API endpoints:
Here’s a full list of your API endpoints in the format you asked for, based on your **blog app urls.py** and router setup. All of these are prefixed under `/api/`:

---

## 🔑 Authentication
- `http://127.0.0.1:8000/api/login/`  
- `http://127.0.0.1:8000/api/token/refresh/`

---

## 👤 User Utilities
- `http://127.0.0.1:8000/api/users/`  
- `http://127.0.0.1:8000/api/users/me/`  
- `http://127.0.0.1:8000/api/users/change-password/`  
- `http://127.0.0.1:8000/api/users/<id>/reset-password/`

---

## 🏠 Home Page
- `http://127.0.0.1:8000/api/carousels/`  
- `http://127.0.0.1:8000/api/departments/`  
- `http://127.0.0.1:8000/api/principal-messages/`

---

## 🎉 Events
- `http://127.0.0.1:8000/api/event-categories/`  
- `http://127.0.0.1:8000/api/events/`  
- `http://127.0.0.1:8000/api/enrollments/`

---

## 📖 About Us
- `http://127.0.0.1:8000/api/aboutus/`  
- `http://127.0.0.1:8000/api/objectives/`

---

## 🌍 Community Voices
- `http://127.0.0.1:8000/api/programs/`  
- `http://127.0.0.1:8000/api/testimonials/`

---

## 📅 Calendar
- `http://127.0.0.1:8000/api/calendar/`

---

## 📷 Resources
- `http://127.0.0.1:8000/api/photos/`  
- `http://127.0.0.1:8000/api/videos/`  
- `http://127.0.0.1:8000/api/faqs/`

---

## 📬 Contact
- `http://127.0.0.1:8000/api/contacts/`  
- `http://127.0.0.1:8000/api/messages/`  
- `http://127.0.0.1:8000/api/contributions/`

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
