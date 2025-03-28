# BetterCA plugin

## Tools to add:

* CRL Distribution point
* Web-based CSR generation with OTP (for obtaining certificates without exposing private key on any device)

## Install:
1. Clone this repo to /usr/plugins/devel/
2. Go to this folder
3. Run ```make upgrade```

## How to develop?
1. Clone the repo to your development machine
2. Turn on SSH on your OPNsense machine and make sure that it is accessible from your host
3. Use rsync to transfer your file changes from your host with the following command: ```rsync -av . root@<OPNsense IP>:/usr/plugins/devel/OPNsense-Better-CA-tools```