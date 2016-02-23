# IoT based Industrial Thermo-Surveillance and Interlocking                                

Temperature is a common variable in many systems and processes. In most industries there are several equipments to sense the temperature, but it is preferable to automate the measurement process. This temperature sensing module can be used as an early detector of fire in industries and also as a sensor kit in warehouses, hospitals, etc. In this project, different nodes which is used for autonomous temperature measurement. It is implemented using thermistors for measurement of temperature, a controller which simultaneously compares the measured values with the set permissible levels and if the temperature exceeds the set limit, an alert is sent to the designed android app and a control mechanism is switched on(here I have used a single CPU fan as the control mechanism). There is an extended option in the android app to set a threshold value of the temperature.

## Hardware used : 

* [NodeMCU : ](https://github.com/nodemcu/nodemcu-firmware)
An open-source firmware and development kit that helps you to prototype your IOT product easily.The Development Kit based on ESP8266, integates GPIO, PWM, IIC, 1-Wire and ADC all in one board. Power your developement in the fastest way combinating with NodeMCU Firmware.
# <img src="https://github.com/RatulGhosh/Temperature_monitoring_system/blob/master/images/1914-01.jpg" />

* [Raspberry Pi : ](https://www.raspberrypi.org/)
The Raspberry Pi is a low cost, credit-card sized computer that plugs into a computer monitor or TV, and uses a standard keyboard and mouse. It is a capable little device that enables people of all ages to explore computing, and to learn how to program in languages like Scratch and Python. It’s capable of doing everything you’d expect a desktop computer to do, from browsing the internet and playing high-definition video, to making spreadsheets, word-processing, and playing games.
# <img src="https://github.com/RatulGhosh/Temperature_monitoring_system/blob/master/images/1914-01.jpg" width="400"/>

*[Thermistor : ](http://www.jameco.com/1/1/27858-ntc-102-r-negative-temperature-coefficient-ntc-thermistor.html)
A thermistor is a type of resistor whose resistance varies significantly with temperature, more so than in standard resistors. Thermistors are widely used as inrush current limiters, temperature sensors, self-resetting overcurrent protectors, and self-regulating heating elements. 

*[ULN2803APG(Fan driver) : ](https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=8&cad=rja&uact=8&ved=0ahUKEwjbh_aK4o7LAhWMxI4KHRg6ChEQFggzMAc&url=http%3A%2F%2Fwww.alldatasheet.com%2Fdatasheet-pdf%2Fpdf%2F182611%2FTOSHIBA%2FULN2803APG.html&usg=AFQjCNH1hWE5d0SANT8S13imTxuNvrz5yg&sig2=0nn3ISoibDpWDAzpR7Xw4A)
The ULN2803APG / AFWG Series are high−voltage, high−current darlington drivers comprised of eight NPN darlington pairs. All units feature integral clamp diodes for switching inductive loads. Applications include relay, hammer, lamp and display (LED) drivers.
Note : This is not compulsory to use fan driver.In this project I have used a  CPU fan as the control mechanism.
