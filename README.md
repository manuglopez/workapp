# Workapp Mockup

## Installation
Clone this repository to your pc. Before running any comand you must be sure that you have node installed in your system
check that your node version is greater than 10.2 

After that go to root project folder an run
npm run install && npm run dev
If all was run without any error you can run npm run watch-poll to run a local server with browser-sync

If you are going to use assets in production you mus run npm run prod or npm run production 

This dev setup is opinionated, and want all your html files to be scanned by tailwind be on src, the same operates for css and js if you want that your assest being compiled by webpack,
of course you can change this configuration but I will not support any issue on custom configs.

All compiled asses including html files are moved to public folder, any change in that folder will not have any effect when your are developing with this setup.

