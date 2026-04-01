## Setting Up Your Workshop Site

Before the workshop, you'll need to set up a local WordPress site using **WordPress Studio**. Studio is a free, lightweight app that runs WordPress right on your computer — no server needed!

There are two ways to get started: using the **Studio app interface** or the **Studio CLI** (command line). Pick whichever you're more comfortable with.

### Step 1: Install WordPress Studio

If you don't have Studio yet, download it from [developer.wordpress.com/studio](https://developer.wordpress.com/studio/) and install it on your machine. The desktop app is available for Mac and Windows. Linux users can use the Studio CLI — install it via npm with `npm install -g wp-studio`.

### Step 2: Download the Workshop Files

Download the workshop bundle from GitHub: [github.com/bph/workshop](https://github.com/bph/workshop). Click the green **Code** button and select **Download ZIP**. Unzip the folder somewhere you can find it easily.

### Step 3: Create Your Site

Choose one of the two options below.

#### Option A: Using the Studio App

1. Open **WordPress Studio**
2. Click **Add site** and choose **Import from blueprint**
3. Navigate to the unzipped workshop folder and select `blueprint-studioapp.json`
4. Wait for Studio to finish setting everything up — this may take a minute or two
5. Your site is ready! Click the site name in Studio to open it in your browser

#### Option B: Using the Studio CLI

If you prefer working in the terminal, the Studio CLI is a fast way to get going.

1. First, enable the CLI: open **WordPress Studio**, go to **Settings** (or **WordPress Studio > Settings** on Mac), and toggle **Enable Studio CLI**
2. Open your terminal and `cd` into the unzipped workshop folder
3. Run the following command:

```
studio site create --name "Concrete and Light" --blueprint ./blueprint.json --path ~/Studio/concrete-light
```

4. Studio will display the site URL, username, and password when it's done
5. Open the URL in your browser and you're all set!

### What You'll Get

Whichever option you choose, your site will come pre-configured with:

- WordPress with PHP 8.2
- The **Create Block Theme** and **Gutenberg** plugins installed and activated
- Demo content already imported — 5 pages and 3 project posts for a fictional architecture studio called *Concrete & Light*
- A static homepage and pretty permalinks configured

### Need Help?

If you run into any issues during setup, don't worry! We'll have time at the start of the workshop to troubleshoot. Just make sure you have WordPress Studio installed beforehand so we can hit the ground running.

See you at the workshop!
