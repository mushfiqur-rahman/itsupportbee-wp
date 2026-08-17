# IT Support Bee - Custom WordPress Theme Files (itsupportbee-wp)

A backup repository for custom WordPress template files used on the [IT Support Bee](https://itsupportbee.com) website.

These files contain custom PHP, HTML, and CSS modifications tailored for the **Hello Elementor** theme. Because these edits are applied directly to the main theme rather than a child theme, this repository serves as a version control backup. Whenever the Hello Elementor theme is updated via the WordPress dashboard, these files can be used to instantly restore the custom site design.

## 📁 Files Included

- **`single.php`**
  - Custom layout for individual blog posts.
  - Features a Flexbox two-column layout (65% content / 30% sidebar).
  - Injects the Merriweather font specifically for post content.
  - Dynamically pulls Elementor Global CSS variables for pagination link colors.
  - Fixes featured image constraints to display full 1200x800 aspect ratios without aggressive cropping.
- **`sidebar.php`**
  - Custom sidebar widget template called by `single.php`.
  - Includes a custom Search Form, Recent Posts query (excluding current post), and Categories list.
  - Features a "Follow Us" social media block utilizing FontAwesome icons (`fab`) and SEO-friendly `rel="nofollow"` tags.
- **`404.php`**
  - Custom "Page Not Found" template.
  - Includes viewport height (`min-height: 50vh`) and padding fixes to ensure the page content is centered and the footer is pushed to the bottom of the screen.

## 🛠️ How to Restore After a Theme Update

When the Hello Elementor theme is updated, it will overwrite the live site files with default versions. To restore the IT Support Bee custom design:

1. Download the latest versions of `single.php`, `sidebar.php`, and `404.php` from this repository.
2. Access the website's files via Hostinger File Manager, cPanel, or FTP.
3. Navigate to the theme directory: `public_html/wp-content/themes/hello-elementor/`
4. Upload the files from this repository, replacing the newly updated default files on the server.
5. Clear the website cache (if applicable) and refresh the page. The custom design will instantly return.

---

**Author:** [Mushfiqur Rahman](https://github.com/mushfiqur-rahman)
