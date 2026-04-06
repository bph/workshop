## Workshop: Styling the Header Template Part

### What you'll change

Transform the default header (white background, serif title, tagline visible) into a dark, minimal navigation bar with uppercase text and an accent border.

### Theme color reference

| Name | Slug | Color |
|------|------|-------|
| Base | `base` | `#2B2B2B` |
| Contrast | `contrast` | `#F5F0E8` |
| Accent | `accent` | `#C8A96E` |
| Muted | `muted` | `#B0A99A` |
| Surface | `surface` | `#3A3632` |
| Deep | `deep` | `#181614` |
| Border Subtle | `border-subtle` | `rgba(232, 224, 208, 0.10)` |

---

### Step 1: Install Fonts

Before you can use the Concrete & Light typography, you need to add the fonts to your site.

1. In the WordPress admin, go to **Appearance → Fonts**
2. Click the **Install Fonts** tab
5. Search for **Jost**
   - Select the weights you need: **200 (ExtraLight)**, **300 (Light)**, **400 (Regular)**, and **500 (Medium)**
   - Click **Install**
6. Search for **Playfair Display**
   - Select weights: **400 (Regular)**, **500 (Medium)**, and **700 (Bold)**
   - Click **Install**
7. You can now close the Fonts page

> Both fonts are now available across the Site Editor for any block.

---

### Step 2: Set Global Styles (Palette, Colors & Typography)

1. In the Site Editor (**Appearance → Editor**), click the **Styles** icon (half-moon circle, top-right toolbar)
2. Click **Colors**
3. Under **Palette**, click to edit and add the Concrete & Light custom colors:
   - Click **Custom** then the **+** button to add each color:
     - **Base** → `#2B2B2B`
     - **Contrast** → `#F5F0E8`
     - **Accent** → `#C8A96E`
     - **Muted** → `#B0A99A`
     - **Surface** → `#3A3632`
     - **Deep** → `#181614`
   - Name each color as you add it — these names will appear in the color picker throughout the editor
4. Now set the global defaults:
   - Set **Background** to **Base**
   - Set **Text** to **Contrast**
5. Click the back arrow, then click **Typography**
   - Under **Text**, choose **Jost** with weight **300**
   - Under **Headings**, choose **Playfair Display** with weight **500**
6. Click **Save** (top-right)

> These global changes define your site's color palette and typography. Every block can now pick from these colors, and the header will inherit the defaults automatically.

---

### Step 3: Edit the Header Template Part

1. In the Site Editor sidebar, go to **Patterns → Template Parts → Header**
2. Click to open the header for editing

#### Remove the Tagline
3. Click on the **Site Tagline** block ("Heritage Architecture & Restoration, Mumbai")
4. Open the **Options menu** (⋮ three dots) → **Delete**

#### Remove the Site Logo (if present)
5. If there's a **Site Logo** block, delete it the same way

#### Style the Site Title
6. Click on the **Site Title** block ("Concrete & Light")
7. In the **Block settings** sidebar (right panel):
   - Under **Typography**, set:
     - Font: **Jost**
     - Size: **0.8rem**
     - Weight: **300**
     - Letter spacing: **0.25em**
     - Text transform: **Uppercase**
   - Under **Color**, set text color to **Contrast**

#### Style the Navigation
8. Click the **Navigation** block
9. In the Block settings:
   - Under **Typography**, set:
     - Font: **Jost**
     - Size: **0.75rem**
     - Weight: **200**
     - Letter spacing: **0.15em**
     - Text transform: **Uppercase**
   - Set text color to **Contrast**

#### Set the Layout
10. Click the outer **Group** block (the header container) — use the **List View** (☰ icon, top-left) to select it easily
11. In Block settings:
    - Under **Color**, set **Background** to **Base**
    - Under **Border**, add a bottom border:
      - Width: **1px**
      - Color: enter `rgba(232, 224, 208, 0.10)` in the custom color hex field
    - Under **Layout**, set to **Row** with **Space between** justification
    - Under **Dimensions/Spacing**, set padding:
      - Top: **2.5rem**
      - Bottom: **2rem**
      - Left/Right: **X-Large** (4rem)

12. Click **Save**

---

### Result

Your header should now show the site title and navigation in a single row on a dark background, with uppercase light-weight text and a subtle bottom border — matching the Concrete & Light design language.
