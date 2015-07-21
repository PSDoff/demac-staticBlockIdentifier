#Papers, Please - CMS Block Identifier v0.0.0
##Description
Prefix and suffix content pulled from static blocks with HTML comments specifying the id name of all static blocks

##Installation
Copy/Paste the app folder into the root of your project

##Uninstall
Delete the following:
- app/code/local/CmsBlock
- app/etc/Demac_CmsBlock.xml

##Testing
No automated testing available. HTML comments surrounding existing static block content should be present after cache clear

##Troubleshooting
Be mindful of store scope. The extension does not specify the static block unique identification number.
