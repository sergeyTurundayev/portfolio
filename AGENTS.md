# Repository Guidelines

## Project Structure

This repository is a small static portfolio website. `index.html` contains the page content and inline SVG contact icons; `css/all.css` contains the layout and responsive styling. Place project preview images in `works/`, the profile image and other page images in `images/`, and browser icons and manifests in `favicon/`. There is no application code, build system, or test suite.

## Development and Preview

No build or install step is required. From the repository root, run:

```sh
python3 -m http.server 8000
```

Then open `http://localhost:8000`. Preview changes at desktop and mobile widths. Keep asset paths relative to the site root so they work when hosted as a static site.

## Style and Naming

Use two spaces for HTML and CSS indentation, preserve the existing readable multiline markup, and use lowercase, descriptive filenames with hyphens where practical (for example, `works/project-name.png`). Keep styles in `css/all.css`; avoid adding JavaScript or dependencies for behavior that can be handled with existing HTML and CSS. Use semantic HTML, meaningful `alt` text for informative images, and accessible names for icon-only links. Inline SVG contact icons should retain the shared `.contact-icon` sizing and inherit their color from the link.

## Testing and Review

There is no automated test or lint command. Before submitting a change, preview the page in a browser, check narrow and wide layouts, and confirm that every local image, stylesheet, and icon path resolves. For content or asset updates, verify the relevant links and image descriptions. Keep changes focused and do not add generated files or unused assets.

## Commits and Pull Requests

Write short, imperative commit subjects that describe the change (for example, `Add project preview`). The Git history could not be inspected in this environment, so no repository-specific commit convention is established. Pull requests should summarize the visible change, mention affected assets or paths, and include a screenshot for visual updates. Link related issues when applicable.

## External Links and Assets

External links that open a new tab should include `rel="noopener noreferrer"`. Prefer local assets for page-critical icons so the contact section remains usable when a third-party CDN is unavailable.
