### Challenges and  Competition

Qn1: I have a Laptop with Windows 10 OS, but i dont its password. So I want to remove pasword by using a flash disk that has Ubuntu OS, can you help me step by on how to remove password of the existing of the laptop that has Window 10 OS?

Steps: After running Ubuntu Trial and Open Terminal
- Step 1:
  ```
  sudo apt update
  sudo apt install chntpw
  ```
- Step 1
  ```
  sudo fdisk -l

  ```
- Step 2 : Do this if drive is not mouted
  ```
  sudo mkdir /mnt/windows
  sudo mount /dev/sda2 /mnt/windows
  ```
- Step 3:
  ```
  cd /mnt/windows/Windows/System32/config
  ```
- Step 4
  ```
  sudo chntpw -l SAM
  ```
- Step 5
  ```
  sudo chntpw -u [username] SAM
  ```
- Step 6
  ```
  Follow the prompts:
     - Press 1 to clear the password.
     - Type q to quit.
     - Confirm with y to save changes.
  ```
- Step 7: Reboot into Windows
