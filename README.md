# ExamplePlugin

A PocketMine-MP plugin built with the [Pockgin](https://github.com/pockgin) standard workflow.

## Requirements

- PocketMine-MP API 5.0.0+
- PHP 8.2+

## Installation

Download the latest `.phar` from the [Releases](../../releases) page and place it in your server's `plugins/` folder.

## Development

1. Clone this repository
2. Edit the source code in `src/`
3. Update `version` in `plugin.yml` when ready to release
4. Push to `main` - the CI workflow will automatically build and create a release

## How It Works

This template uses the **Pockgin standard build workflow**:

- On every push/PR, the plugin is validated and built using `@pockgin/cli`
- When `plugin.yml` version is bumped and pushed to `main`, a GitHub Release is automatically created with the `.phar` artifact
- No manual release steps needed

## License

[MIT](LICENSE)
