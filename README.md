# Concrete & Light — Workshop Bundle
## WordPress Block Theme Development, Mumbai

---

### What's in this folder

```
workshop/
├── blueprint.json                  ← WordPress Playground CLI blueprint
├── blueprint-studioapp.json        ← WordPress Studio app blueprint
├── concrete-and-light/             ← The block theme
├── concrete-and-light.zip          ← Theme zip for installation
├── concrete-and-light.xml          ← Demo content (WXR import)
└── README.md                       ← This file
```

---

### How to use with the Studio CLI

From the workshop folder, run:

```bash
studio site create --name "Concrete and Light" --blueprint ./blueprint.json --path ~/Studio/concrete-light
```

Studio will automatically:
- Install WordPress (PHP 8.2, latest WP)
- Install and activate **Create Block Theme**, and **Gutenberg** plugins
- Import all demo content (5 pages + 3 project posts)
- Set the Home page as the static front page
- Set pretty permalinks (`/post-name/`)

After site creation, install the theme manually from `concrete-and-light.zip`.

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

### Workshop notes

- **Create Block Theme** is pre-installed for exporting theme modifications made in the Site Editor
- Content is placeholder — students should replace images via the featured image panel on each post/page
- Images: use [WordPress Photos](https://wordpress.org/photos/) or [Openverse](https://openverse.org/) for freely licensed images

---

*Workshop bundle prepared for the WordPress Block Theme Development workshop, Mumbai, 2026.*
