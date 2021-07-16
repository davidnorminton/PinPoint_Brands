# Brand Manager

A client wants the ability to manage a “brand listing” area that is going to show on multiple pages across the site.  This will show customers a list of all the companies that our client works with.  The client requires the ability to specify a specific grouping/category when they add the brand list to a page (either via a block or a widget) so that they can make this display industry specific listings where required - i.e. electric car brands on an electric car page, or Mercedes retailers on a Mercedes page .  If a grouping/category isn’t supplied, the default behaviour should be to show all enabled brands.

- The brands may be used throughout other areas of the site both individually and in groups.

- On the frontend of the site, the listing should be shown in a carousel.

- An admin user should find the functionality at: Admin > Content > Logo Manager > Manage Logos

Each brand should allow the following to be set by an admin user, alongside any other fields you feel relevant, for example to track usage, when the brand was created etc.

- Desktop Logo Image
- Mobile Logo Image
- Alt Text
- Title
- Description
- Category
- Enabled / Disabled

Additionally, the client has requested an export list of brands previously that we have supplied.  To make it easier for the team to output the required information, please create a CLI command that can be used to export the brands into a CSV file available for the team to download.

## Run Tests
```console
$ vendor/phpunit/phpunit/phpunit -c dev/tests/unit/phpunit.xml.dist app/code/PinPoint/Brands/Test/Unit/
```
