# evt-theme

## Installation

Add the following to your `composer.json` page:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/antoninguyot/evt-theme"
    }
  ]
}
```

Then, run:

```
 $ composer require evertrust/filament-theme
```

## Usage

Register the plugin in your `PanelServiceProvider`:

```php
    ...
    ->plugin(new \Evertrust\FilamentTheme\EvertrustPlugin())
```
 