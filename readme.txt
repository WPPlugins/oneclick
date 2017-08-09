=== Plugin Name ===
Contributors: prototypeangel,whiteshadow
Donate link: http://anirudhsanjeev.org/sponsor-oneclick/
Tags: plugin, install, oneclick, theme, autoinstaller
Requires at least: 1.5
Tested up to: 2.6
Stable tag: 0.9.9

(Obsolete) OneClick is a plugin which allows you to install plugins and themes from zip files on your disk, zip file urls, or Firefox.

== Description ==

**Important Notice**
This plugin is deprecated and is no longer maintained by it's original author. You should use [One Click Plugin Updater](http://wordpress.org/extend/plugins/one-click-plugin-updater/) instead.

If you really want to use *this* plugin you can download the last stable version by clicking "Other versions" (see the menu to the right) and selecting *0.9.8-old*. 

If you use the big red "Download" button you will get a version that will try to automatically transform into the *One Click Plugin Updater* plugin. This, while no doubt interesting from the programmer's point of view, isn't very reliable or safe, so don't try it unless you have to ;)


**Readme for version 0.9.8**

OneClick is a Wordpress Plugin+Firefox Extension combo which will change the way you look at wordpress forever. It reduces the effort needed to install a plugin or a theme for wordpress to just one simple click. It’s excellent for admins, non-techies, people with restrictive firewalls, and just about anyone who uses wordpress and installs plugins and themes.

Please install the [corresponding firefox extension](https://addons.mozilla.org/en-US/firefox/addon/5503) for maximum enjoyment :). Of course, oneclick will work without the extension, but the extension won't work without the plugin.Please install the [corresponding firefox extension](https://addons.mozilla.org/en-US/firefox/addon/5503) for maximum enjoyment :).
Features:

The main features of this plugin are:

    * Install any plugin/theme from the zip file on your hard drive.
    * Install any plugin/theme from any URL of the zip file
    * perform easy maintenance and upgrades
    * automatically checks for updates, and installs updates itself, if required.
    * Auto diagnostics wether everything is working properly.

OneClick is also the only wordpress plugin to come bundled with it’s own firefox extension. If you see any cool link to download a plugin or a theme, (like the ones on this page, wordpress extend, or themes.wordpress.net), all you need to do is right click on any link and select the type(theme/plugin) and it’ll get automatically uploaded.

OneClick also comes with the purgatory, a backup and deletion system that is completely independent of wordpress’ database and php, so if a plugin messes up the entire admin interface, you can easily delete it.

Apart from that some other features are:

    * One touch zip backup of all your themes and plugins for your downloading pleasure.
    * experimental “upload and auto-activate”(disabled in the current release, but easy enough to try for the brave at heart)

Quick notes:

Using the firefox extension: Install the extenison, restart firefox, go to Tools/Addons/OneClick and select the “options” button on it. Now log into your wp-admin, and open the oneclick installer. Now enter this url, typically (blog url)/wp-admin/admin.php?page=oneclick/oneclick.php and now you can use it.

Also, while installing, be sure that the link on which you’re right clicking is the Zip file of the plugin or theme. It should be a simple, non-encrypted url for a zip file, and only then it’ll work.

Many people complain that they are not able to delete files and folders created by oneclick. Please use the purgatory module for doing this, you can easily delete files/folders and even back them up, and it’s keyword protected, and independent of wordpress databases and php, so even misbehaving plugins can be easily removed.



== Installation ==

1. Download, unzip, upload via ftp (doing so for the last time in your life)      or: if you have oneclick version 0.42, just use the zip file.
2. If it doesen’t work right away, (might not work on 1% of the hosts, you may need to chmod to 755. To do this, use a ftp client like filezilla, and right click, choose “file attributes”, and set write permissions for group.
3. Test the install by uploading a plugin from your hard disk. If this works, the plugin is working.
4. install the [corresponding firefox extension](https://addons.mozilla.org/en-US/firefox/addon/5503) for maximum enjoyment :). Of course, oneclick will work without the extension, but the extension won't work without the plugin.Please install the [corresponding firefox extension](https://addons.mozilla.org/en-US/firefox/addon/5503).
5. On firefox, go to Tools>Addons>OneClick installer for wordpress>Options and enter your "oneclick url". This URL is listed at the bottom of your oneclick page.
6. Try installing a plugin or a theme from your right click menu. Be sure to click on the download link for a zip file or a plugin or a theme.

== Frequently Asked Questions ==

= Do I have to chmod any folders =
Usually, no. But certain hosts may change the default CHMOD value and you may have to change it.
= Is there a security risk with using OneClick =
Yes, you may accidentally install malicious code because it's no longer a long process to install. The best workaround for this is to be careful of what you click on, and if you're the owner of a big blog, be sure to test the plugin you're installing on a local machine, and then use the file upload system of oneclick to install the plugin.
= Are there localized versions =
No, but if you want to help localize, send an email to anirudh at anirudhsanjeev.org