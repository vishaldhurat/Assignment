##Eastern Enterprise Dynamic Price Extension
This extension load product price dynamically by calling a third party API.

##Support: 
version - 2.3.x, 2.4.x

##How to install Extension

1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/EasternEnterprise/DynamicPrice
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/EasternEnterprise/DynamicPrice'
5. Disable full page cache to show dynamic prices.
6. Uncomment the Third part api calling code in getPriceBySku() in '[Magento_Root]/app/code/EasternEnterprise/DynamicPrice/Plugin/Product'.
7. Replace api url with your third part api url.

#Enable Extension:
- php bin/magento module:enable EasternEnterprise_DynamicPrice
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:disable full_page
- php bin/magento cache:flush

#Disable Extension:
- php bin/magento module:disable EasternEnterprise_DynamicPrice
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:enable full_page
- php bin/magento cache:flush
