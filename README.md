# Concrete & Light — Workshop Bundle
## WordPress Block Theme Development, Mumbai

---

### What's in this folder

```
workshop/
├── blueprint.json                  ← WordPress Studio blueprint
├── my-theme/                       ← The bare-bones block theme (extracted)
├── my-theme.zip                    ← Theme zip (not tracked in git)
├── concrete-and-light.xml          ← Demo content (WXR import)
└── README.md                       ← This file
```

---

### How to use in WordPress Studio

1. Open **WordPress Studio** on your machine
2. Click **Add site → Import from blueprint**
3. Select `blueprint.json` from this folder
4. Studio will automatically:
   - Install WordPress (PHP 8.2, latest WP)
   - Install and activate **Create Block Theme**, **WordPress Importer**, and **Gutenberg** plugins
   - Import all demo content (5 pages + 3 project posts) from GitHub
   - Set the Home page as the static front page
   - Set pretty permalinks (`/post-name/`)
5. After site creation, install the theme manually from `my-theme.zip`

---

### What gets imported

**Pages**
| Title | Template | Slug |
|---|---|---|
| Home | Landing Page (no header/footer) | `/home/` |
| About the Studio | Default Page | `/about/` |
| What We Do | Default Page | `/services/` |
| Get in Touch | Default Page | `/contact/` |
| Projects | Default Page | `/projects/` |

**Posts (Projects)**
| Title | Category | Slug |
|---|---|---|
| The Readymoney Mansion, Malabar Hill | Residential Restoration | `/readymoney-mansion/` |
| Wadia Baug Warehouse, Byculla | Adaptive Reuse | `/wadia-baug-warehouse/` |
| St. Anne's Chapel, Bandstand, Bandra | Community & Religious | `/st-annes-chapel/` |

---

### Theme structure

```
my-theme/
├── style.css
├── functions.php                   ← Registers block styles + pattern category
├── theme.json                      ← Full palette, typography, spacing, styles
├── templates/
│   ├── index.html                  ← Blog / posts index
│   ├── single.html                 ← Single post
│   ├── page.html                   ← Standard page
│   ├── page-landing.html           ← Landing page (no header/footer)
│   ├── archive.html                ← Generic archive
│   └── category-projects.html      ← Portfolio archive (Projects category)
├── parts/
│   ├── header.html
│   └── footer.html
├── patterns/
│   ├── hero-default.php
│   ├── hero-dark-band.php
│   ├── services-three-columns.php
│   ├── stats-three-numbers.php
│   ├── cta-dark-band.php
│   ├── testimonial-accent-band.php
│   └── featured-project-split.php
└── styles/
    ├── dark.json                   ← Dark colour variation
    ├── editorial-authority.json    ← Typography: Playfair + Source Serif 4 + DM Sans
    └── bold-and-clean.json         ← Typography: Syne + Lora
```

---

### Group block style variations

Apply these via the block inspector → Styles panel:

| Label | Class | Background | Text |
|---|---|---|---|
| Dark Band | `is-style-dark-band` | Dark Blue | White |
| Accent Band | `is-style-accent-band` | Dark Purple | White |
| Highlight | `is-style-highlight` | Yellow | Dark Blue |

---

### Colour palette

| Slug | Hex | Role |
|---|---|---|
| `base` | `#FFFFFF` | Page background |
| `primary` | `#006D77` | Teal — links, headings |
| `secondary` | `#3B0764` | Dark purple — H1/H2 |
| `contrast` | `#1E3A5F` | Dark blue — body text |
| `accent` | `#F97316` | Orange — buttons, CTAs |
| `accent-alt` | `#F5C518` | Yellow — highlights |
| `base-dark` | `#0D0D1A` | Dark mode background |
| `primary-dark` | `#3AB8C5` | Teal (dark mode) |
| `secondary-dark` | `#C084FC` | Purple (dark mode) |
| `contrast-dark` | `#E2E8F0` | Off-white (dark mode) |

---

### Fonts (self-hosted — add files to `/assets/fonts/`)

| Slug | Family | Used for |
|---|---|---|
| `heading` | Fraunces | All headings (default) |
| `body` | Inter | Body text, UI (default) |

Typography style variations swap these for alternative font stacks. Download from Google Fonts and place `.woff2` files in the paths declared in `theme.json`.

---

### Workshop notes

- **Create Block Theme** is pre-installed for exporting theme modifications made in the Site Editor
- Content is placeholder — students should replace images via the featured image panel on each post/page
- Images: use [unsplash.com](https://unsplash.com) — search terms are in the `concrete-and-light-content.md` reference document
- The Projects archive uses `category-projects.html` — WordPress matches it automatically when browsing the Projects category

---

*Workshop bundle prepared for the WordPress Block Theme Development workshop, Mumbai, 2026.*
