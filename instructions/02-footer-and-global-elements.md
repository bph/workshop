## Workshop: Footer & Global Element Styles

In this exercise you'll build the footer template part and then style the global elements (buttons, links, headings) to match the Concrete & Light design.

---

### Part A: Build the Footer Template Part

Coming off the header work, let's complete the other template part — the footer.

1. In the Site Editor sidebar, go to **Patterns → Template Parts → Footer**
2. Click to open the footer for editing
3. Use **List View** (☰ icon, top-left) to manage blocks easily

#### Set the container
4. Select the outer **Group** block
   - Under **Color**, set **Background** to **Deep**
   - Under **Border**, add a top border:
     - Width: **1px**
     - Color: **Muted**
   - Under **Layout**, set content width to **1280px**
   - Under **Dimensions/Spacing**, set padding:
     - Top: **XX-Large** (6rem)
     - Bottom: **Large** (2.5rem)
     - Left/Right: **X-Large** (4rem)

#### Add a Columns block
5. Inside the Group, add a **Columns** block
6. Set it to 4 columns with these widths: **40%**, **20%**, **20%**, **20%**

#### Column 1 — Studio name & tagline
7. Add a **Heading** block (H3):
   - Text: "Concrete & Light"
   - Font: **Playfair Display**, size **1.75rem**, Appearance: **Medium**
   - Color: **Contrast**
8. Below it, add a **Paragraph**:
   - Text: "Spaces carved from silence and poured in stone. An architectural practice dedicated to the honest expression of material and light."
   - Font: **Jost**, size **0.875rem**, Appearance: **Extra Light**
   - Color: **Muted**

#### Column 2 — Page links
9. Add a **Heading** block (H4):
   - Text: "Studio"
   - Font: **Jost**, size **0.7rem**, Appearance: **Regular**
   - Letter spacing: **0.15em**, Text transform: **Uppercase**
   - Color: **Accent**
10. Below it, add a **Page List** block
    - Font: **Jost**, size **0.8125rem**, Appearance: **Extra Light**
    - Color: **Contrast**

#### Column 3 — Connect
11. Same H4 style as Column 2, text: "Connect"
12. Add a **Paragraph** with social links text (Instagram, LinkedIn, etc.)
    - Same styling as Column 2's page list

#### Column 4 — Visit
13. Same H4 style, text: "Visit"
14. Add **Paragraph** blocks with the studio address
    - Same styling as above

#### Add the bottom bar
15. Below the Columns, add a **Separator** block
    - Style: **Wide line**
    - Set top margin: **X-Large** (4rem), bottom margin: **Medium** (1.5rem)
16. Add a **Group** block with **Row** layout, **Space between** justification
17. Inside, add two **Paragraph** blocks:
    - Left: "2026 Concrete & Light. All rights reserved."
    - Right: "Created with Telex, powered by WordPress"
    - Both: Font **Jost**, size **0.7rem**, Appearance: **Extra Light**, letter spacing **0.1em**, color **Muted**

18. Click **Save**

---

### Part B: Style Global Elements

Now that the header and footer are done, let's set global element styles. These ensure every button, link, and heading across your site looks consistent — without styling each one individually.

1. Go to **Appearance → Editor**, then click the **Styles** icon (half-moon circle, top-right)

#### Headings & Links
2. Click **Typography**
   - Under **Headings**:
     - Font: **Playfair Display**
     - Appearance: **Medium**
     - Line height: **1.15**
     - Letter spacing: **-0.01em**
   - Under **Links**:
     - Color: **Accent**
     - Hover color: **Contrast**
3. Click **Colors**
   - Under **Headings**, set text color to **Contrast**

#### Buttons
4. Go back to the main Styles panel, then click **Blocks → Button**
   - Under **Color**:
     - Background: **Accent**
     - Text: **Base**
   - Under **Typography**:
     - Font: **Jost**
     - Size: **0.8125rem**
     - Appearance: **Regular**
     - Letter spacing: **0.12em**
     - Text transform: **Uppercase**
   - Under **Border**: set radius to **0**

5. Click **Save**

---

### Result

Your site now has a fully built footer with studio branding, navigation, social links, address, and copyright — plus consistent global styles for headings, links, and buttons across every page.
