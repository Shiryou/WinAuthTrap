# Windows Authentication Trap

The Windows Authentication Trap is a trick intended for use in corporate intranet web apps that don't require authentication but need to track which domain user is viewing the page.

Essentially, there is one page on the Intranet that requires Windows Authentication. For all clients that support it, this automatically “logs in” as the user.

The test page loads the NTLM trap page through XMLHttpRequest with fake credentials. For supported clients, the fake credentials are ignored and the trap page returns the user that is logged in. For unsupported clients, the fake credentials passed through the XMLHttpRequest bypass the standard HTTP Basic Authentication popup asking for username and password. This way the unsupported clients automatically return 401 Unauthorized.

**Note:** The username in the XMLHttpRequest must not be blank `""`.

## Setting up the trap page

**IIS 6.1:**

1. Right-click the site in the sites list and select *Switch to Content View*.
2. Locate and right-click `winauthtrap.php` and select *Switch to Features View*.
3. Double-click *Authentication*. Disable all types of authentication except *Windows Authentication*.
4. Update the request URL in `winauthtest.php` to verify the trap is working properly.