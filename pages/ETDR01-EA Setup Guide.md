# How to Configure the Attendace Control IOT device?
**Intro**

The Attendance Control (ETDR01-EA) is an IOT device that allows businesses and households to keep a record of attendance using dated selfies. It provides a web interface that allows its configuration, maintenance and visualization of the attendance record to date.

To configure the ETDR01-EA it is required one of the following client device with WiFi access capability: a PC, laptop or smartphone.

**Step 1 - Turn on the ETDR01-EA**

Connect the provided power cord to the ETDR01-EA device and from the nearest outlet.

![enter image description here](https://embed.creately.com/kqGSQt3g7lp?token=pkobxxffjYLqi839&type=svg)

When the ETDR01-EA is connected, it initiates a sequence indicated by turning on the led flash light that turns off after finishing the startup process.

**Step 2 - Connect to the WiFi Access Point**

For the first time, the ETDR01-EA makes available an WiFi Access Point   (AP) to allow the initial configuration. This AP is accessible through the IP address 192.168.4.1.

![enter image description here](https://embed.creately.com/VNtYEJBOMWb?token=go0Iz9n8hj64UkdY&type=svg)

From your client device (PC, laptop or smartphone), connect to the Access Point named ETDR01-###############. The pass phrase it is 12345678.

Important!

The last part of the ETDR01-EA device name (##############) it is the serial number of the device. Make a note of this number as it is the default password for the initial login. 

**Step 3 - Initial Configuration**

Once your client device has connected to the AP, open the browser and navigate to the IP address 192.168.4.1.
  
On the Login page, enter Admin in the username field, and the annotated serial number in the password field.

The browser shows the dashboard. From this, click or tap on Change Password option. Make sure to select a good password.

Next, click or tap on WiFi Connection to configure the WiFi access to the local area network router.

From the list box shown on the page, select the SSID of your network, and enter the corresponding pass phrase.

Select Restart Now so the new WiFi connection and the new admin's password takes effect.

**Step 4 - Find the new IP Address Assigned**

After reboot, the ETDR01-EA connects with the provided WiFi credentials.

The scenario changes to this context:

![enter image description here](https://embed.creately.com/vHyDLlT4IMM?token=OtOvs8WmXQMQztVT&type=svg)


To access the ETDR01-EA Setup and Info page, the user needs to know the new dynamic IP Address assigned by the router to the ETDR01-EA device.

To obtain the new assigned IP Address, the user can do it on the router's configuration page finding the ETDR01-########### host name, or using a network scanner program.

*IMPORTANT!*

Each time the ETDR01-EA turns on, its try to connect the configured SSID as an station (STA) with stored WiFi credentials provided by user.
If no credentials stored or credentials changed after the setup, in 30 seconds it create an AP on 192.168.4.1 to let the owner user configure the WiFi credentials and other settings.

**Step 4 - Test the Attendance Control**

Stand in front of the device and press the shutter button. As soon as you bring your finger close to the device, it will detect it and perform the registration by taking a photo.

To verify the new attendance record, browse to the new device's IP Address, and login with the user Admin and changed password.  Next, click or tap on the Photo Files List. This option shows the last photos taken. Verify that the file name corresponds to the date time when was the attendance.  If the date and time is different, this means that you need to change the Time Zone parameter on the device as shown next.

**Step 5 - Change the Time Zone**

Click or tap on Settings; on the Time Zone Field type de code corresponding to your place. This code is available from the URL provided near the field.

**Step 6 - Led Flash Enabled**
  
By default, the device turn on the led flash light to take photos. This may be unnecessary if there is a very well light environment or is inconvenient for the regular user. If this is the case, click or tap on Settings, deselect the checkbox named Led Flash Enabled field, and click or tap on Apply.

**Step 7 - IOT Web Server Enabled**
  
The ETDR01-EA can notify a server every time someone attend. This enables post-processing of the event, for which the administrator must configure the following parameters:

Web Server Post Domain
	It is the Web Server Post URL to be notified
Web Server Post Port
	It is the port on the Web Server to be notified
Web Server Post Path
	It is the path on the Web Server to be notified
Web Server Post UUID
	It is a key the Web Server to be notified can validate

For this configuration to take place, the IOT Web Server Enabled parameter must be activated.

**Troubleshutting**

1.  Failed to connect to WiFi

	Verify that the WiFi credentials have not changed. If the case update it!
				
2.  Camera does not takes photos		  
		
	It may be that there is no more space available. Check Free Bytes 		on Settings - Device State
		
3.  Device cannot start or reboots

	Check the PSU connection to the power wall.	
	
4.  Weak Wi-Fi Signal.
	
	The device needs a good WiFi signal, so it should be located as close as possible to the router.
	
5.  Do not remember the username and Admin password.

	This case requires resetting the device. To do a reset, you must use the password that the device comes from the factory, which is the second part of the device's host name. Login with the Admin user and the default password; The device will ask if you want to reset the parameters to their original values. If you answer affirmatively, you will have to perform the configuration again as established in this guide from step number 1.



For more details and assistance, do not hesitate to contact us at www.enablitech.com
