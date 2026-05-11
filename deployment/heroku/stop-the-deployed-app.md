# The Running App


```
(.venv) PS C:\Users\abuuy\Herd\django-api\blogapi> heroku info -a vema-blog-api
=== ⬢ vema-blog-api

Addons:         heroku-postgresql:essential-0
Auto Cert Mgmt: false
Git URL:        https://git.heroku.com/vema-blog-api.git
Web URL:        https://vema-blog-api-f18bb4eef2a6.herokuapp.com/
Repo Size:      22 KB
Slug Size:      36 MB
Owner:          abuu.yus@gmail.com
Region:         us
Dynos:          web: 1
Stack:          heroku-24
(.venv) PS C:\Users\abuuy\Herd\django-api\blogapi>
```

# Then Follow these steps
```
- Dynos: web: 1 →  means there is  one dyno running, which means the app is active and can generate charges.  
- Add‑ons: heroku-postgresql:essential-0 → means a PostgreSQL database attached. Even though “essential” is a free tier, if you scale up or exceed limits, it can trigger billing.  
- Region/Stack: US, heroku-24 → Just environment details.  
- Web URL: The  app is live at https://vema-blog-api-f18bb4eef2a6.herokuapp.com/

# How to Prevent Charges

1. Scale Dynos to Zero.Stop the running dyno:    heroku ps:scale web=0 --app vema-blog-api
2. Remove Add‑ons, Check add‑ons: heroku addons --app vema-blog-api,  heroku addons:destroy heroku-postgresql --app vema-blog-api

3. **Delete the App (safest option), if you don’t want the app at all:heroku apps:destroy --app vema-blog-api
4. Manage Billing:Go to [Heroku Dashboard](https://dashboard.heroku.com) → Account Settings → Billing.  
   - Remove your Visa/Master card if you don’t plan to use paid services.  
   - Review invoices to confirm no ongoing charges.
5. Verify: After scaling down or deleting: heroku apps:info --app vema-blog-api

👉 In short: **scale dynos to 0, remove add‑ons, and delete the app if you don’t need it.** That will stop charges immediately.  

Would you like me to guide you through scaling dynos to zero first (quickest way to stop charges), or go straight to deleting the Heroku app for a permanent stop?
```

# After saclling to 0
```
(.venv) PS C:\Users\abuuy\Herd\django-api\blogapi> heroku ps:scale web=0 --app vema-blog-api
Scaling dynos... done, now running web at 0:Basic
(.venv) PS C:\Users\abuuy\Herd\django-api\blogapi>
```

# Next You may do this
```
Perfect — you’ve successfully scaled your dynos to **0**. That means your app **vema-blog-api** is no longer running, and Heroku will stop charging you for compute time. Let’s recap what this means:

## ✅ Current Status
- **Dynos:** web: 0 → No containers are running. Your app is offline.  
- **Charges:** Dyno usage charges stop immediately.  
- **Add‑ons:** You still have `heroku-postgresql:essential-0` attached. This is the free tier, but if you upgrade or exceed limits, it could generate charges.  

## ⚙️ Effects of Scaling Dynos to 0
- Your app URL (https://vema-blog-api-f18bb4eef2a6.herokuapp.com/) will no longer respond.  
- You can bring it back online anytime by scaling up again: heroku ps:scale web=1 --app vema-blog-api
- No dyno charges while it’s at 0.  
- Database remains available (but unused unless you scale dynos back up).  

## 🔒 Next Steps to Fully Prevent Charges
If you want to be 100% safe:
1. **Remove the PostgreSQL add‑on** if you don’t need it:
      heroku addons:destroy heroku-postgresql --app vema-blog-api
   
2. **Delete the app entirely** if you won’t use it again:
      heroku apps:destroy --app vema-blog-api
3. **Remove your card** from [Heroku Billing Dashboard](https://dashboard.heroku.com/account/billing).


👉 In short: Scaling dynos to 0 has already stopped the charges for running your app. If you want to guarantee **no future billing**, remove add‑ons and delete the app.  

```




