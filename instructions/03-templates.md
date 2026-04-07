## Workshop: Page Templates

In this exercise you'll create two custom templates: a Landing Page template for the home page (with a full-screen hero and no page title) and a Category Projects template for displaying project archives.

---

### Part A: Create the Landing Page Template

The home page currently shows the page title "Concrete & Light" as plain text above the content. We want a full-viewport hero image with the title overlaid dramatically — and no duplicate title.

#### Create the template
1. Go to **Appearance → Editor**, then click **Templates** in the sidebar
2. Click the **+** button to add a new template
3. Scroll down and choose **Custom Template**
4. In the name field, type **Landing Page** and click **Create**
5. WordPress will create an empty template for you to build

#### Build the hero section
5. Add a **Cover** block
   - In Block settings, enable **Use featured image** (this pulls the page's featured image automatically)
   - Set **Minimum height** to **100vh** (full viewport)
   - Under **Color**, set the overlay to **Deep** with opacity around **40%**
   - Set alignment to **Full width**
   - Under **Dimensions/Spacing**, set padding:
     - Top: **0**
     - Bottom: **12vh**
     - Left/Right: **X-Large** (4rem)
   - Set top margin to **0**

6. Inside the Cover block, add a **Group** block
   - Set min height to **80vh**
   - Layout: **Constrained**, content width **860px**, justify left

7. Inside that Group, add a **Spacer** block
   - Set height to **55vh** (this pushes the title to the bottom of the hero)

8. Below the Spacer, add a **Post Title** block
   - This dynamically pulls the page title
   - Set to **H1**
   - Font: **Playfair Display**
   - Size: **clamp(3.5rem, 9vw, 7rem)** (enter in the custom size field)
   - Appearance: **Medium**
   - Line height: **0.9**
   - Letter spacing: **-0.02em**

#### Add the content area
9. Below the Cover block, add a **Group** block
   - Tag: change from `div` to `main` (in Advanced settings)
   - Background: **Base**
   - Alignment: **Full width**
   - Set top/bottom padding to **0**, top margin to **0**

10. Inside that Group, add a **Post Content** block
    - Layout: **Constrained**

#### Add header and footer
11. Move the cursor to the very top of the template (above the Cover block)
    - Add a **Template Part** block → choose **Header**
12. At the very bottom (below the main Group)
    - Add a **Template Part** block → choose **Footer**

13. Click **Save**

#### Assign the template to the Home page
14. Go to **Pages** in the admin sidebar, edit the **Home** page
15. In the page settings sidebar (right panel), under **Template**, switch to **Landing Page**
16. Make sure the page has a **Featured Image** set (use the hero image)
17. Click **Save**

---

### Part B: Create the Category Projects Template

This template displays project posts in a grid when visitors click a category like "Projects."

#### Create the template
1. Go to **Appearance → Editor → Templates**
2. Click **+** to add a new template
3. Choose **Category** as the template type
4. Start fresh — delete any default blocks

#### Add header
5. Add a **Template Part** block → choose **Header**

#### Build the archive header
6. Below the header, add a **Group** block
   - Background: **Base**
   - Alignment: **Full width**
   - Layout: **Constrained**, wide width **1280px**
   - Padding: Top **Huge** (8rem), Bottom **X-Large** (4rem), Left/Right **X-Large** (4rem)
   - Top margin: **0**

7. Inside, add a **Heading** block (H4):
   - Text: "Archive"
   - Font: **Jost**, size **0.7rem**, Appearance: **Light**
   - Letter spacing: **0.2em**, Letter Case: **AB** (Uppercase)
   - Color: **Accent**

8. Below it, add a **Query Title** block (Archive type)
   - Font: **Playfair Display**, size **clamp(2rem, 4vw, 3rem)**, Appearance: **Medium**
   - Line height: **1.15**
   - Color: **Contrast**

9. Below it, add a **Term Description** block
   - Font: **Jost**, size **1rem**, Appearance: **Extra Light**
   - Line height: **1.7**
   - Color: **Muted**

#### Build the post grid
10. Below the archive header Group, add another **Group** block
    - Background: **Deep**
    - Alignment: **Full width**
    - Layout: **Constrained**, wide width **1280px**
    - Padding: Top **XX-Large** (6rem), Bottom **Huge** (8rem), Left/Right **X-Large** (4rem)
    - Top margin: **0**

11. Inside, add a **Query Loop** block
    - Alignment: **Wide**
    - Choose **Start blank**

12. Inside the Query Loop, add a **Post Template** block
    - Set layout to **Grid**, **3 columns**

13. Inside each grid item, add a **Group** block (the project card):
    - Border: **1px**, color **Muted**
    - Padding: Top **0**, Bottom **1.75rem**, Left/Right **0**

14. Inside the card Group:
    - Add a **Post Featured Image** block
      - Enable **Link to post**
      - Border radius: **0**
    - Add a **Group** block for the text area
      - Padding: Top **1.25rem**, Left/Right **1.5rem**
    - Inside the text Group, add:
      - **Post Date** — Font: **Jost**, size **0.7rem**, Appearance: **Light**, Letter spacing: **0.15em**, Letter Case: **AB**, Color: **Accent**
      - **Post Title** (H3, linked) — Font: **Playfair Display**, size **1.375rem**, Appearance: **Medium**, Line height: **1.25**, Color: **Contrast**, Hover color: **Accent**
      - **Post Excerpt** — Font: **Jost**, size **0.8125rem**, Appearance: **Extra Light**, Line height: **1.65**, Color: **Muted**, Excerpt length: **24 words**

#### Add pagination
15. Below the Query Loop, add a **Group** block with **Row** layout, centered
    - Top margin: **X-Large** (4rem)
16. Inside, add a **Query Pagination** block
    - Add Previous, Page Numbers, and Next
    - Font: **Jost**, size **0.8125rem**, Appearance: **Light**, Letter spacing: **0.1em**
    - Color: **Contrast**

#### Add no results message
17. Inside the Query Loop, add a **No Results** block
18. Inside it, add a **Paragraph**:
    - Text: "No projects found. Check back soon for new work."
    - Font: **Jost**, size **1.125rem**, Appearance: **Extra Light**
    - Color: **Muted**

#### Add footer
19. At the bottom, add a **Template Part** block → choose **Footer**

20. Click **Save**

---

### Result

You now have two custom templates:
- **Landing Page** — a full-screen hero with the page title overlaid on the featured image, followed by the page content with no visible title block
- **Category Projects** — a styled archive page with a header, category description, 3-column project card grid with pagination, and footer
