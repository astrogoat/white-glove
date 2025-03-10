# A WhiteGlove app for Strata

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/white-glove.svg?style=flat-square)](https://packagist.org/packages/astrogoat/white-glove)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/white-glove/run-tests?label=tests)](https://github.com/astrogoat/white-glove/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/white-glove/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/white-glove/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/white-glove.svg?style=flat-square)](https://packagist.org/packages/astrogoat/white-glove)

---
This repo can be used to scaffold a Strata CMS App package. Follow these steps to get started:

1. Press the "Use template" button at the top of this repo to create a new repo with the contents of this white-glove
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files
3. Remove this block of text.
4. Have fun creating your package.
---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require astrogoat/white-glove
```

## Usage

```php
$white-glove = new Astrogoat\WhiteGlove();
echo $white-glove->echoPhrase('Hello, Astrogoat!');
```

## Testing

```bash
composer test
```

## Releasing a new version

Use the included GitHub action to create a new release.
Go to https://github.com/astrogoat/white-glove/actions/workflows/release.yml click the "Run workflow" dropdown, select your version level bump, and click the "Run workflow" button.
or run `gh workflow run release.yml` from your white-glove directory if you have the GitHub CLI installed locally.

**Important**: Make sure that the Miles Bot user is included in the list of users who can bypass required pull request requirement
Your repo -> Settings -> Branches -> Main (edit) -> "Allow specified actors to bypass required pull requests"


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.


## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.


## Credits

- [Laura Tonning](https://github.com/tonning)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
