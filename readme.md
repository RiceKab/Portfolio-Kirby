# Tang Kevin Portfolio
A project for Howest course CMS.

## Description
Portfolio assignment built using Kirby, using vagrant to showcase the project.

## Setup
* `git clone https://github.com/RiceKab/Portfolio-Kirby.git`
* Navigate to `<project_root>/kirby` and run `composer install`.
* [Optional] If you already have a `ubuntu/trusty64` box, run `vagrant box update` to get the latest version.
* `vagrant up`

Website is available on `localhost:8888` after the provisioning is finished. You can login to the control panel at `localhost:8888/panel` with username `koenc` and password `koen123`.

If you want to SSH into the machine you can do so with the vagrant defaults: username/password `vagrant`. 

**See a blank page?** - Kirby wasn't properly installed, make sure you've run `composer install` in `/kirby`.

## Security checklist
- [x] [Kirby security](https://getkirby.com/docs/developer-guide/security)
    - I did include the 'accounts' files despite the security advising against since the test account is tied to it.
    - Similarly, config was included since I don't actually have a license in there.
- [x] Security headers
- [x] HTTPS