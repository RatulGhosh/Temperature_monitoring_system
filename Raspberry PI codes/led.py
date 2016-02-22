import RPi.GPIO as GPIO
import time
pin = 17
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(17,GPIO.OUT)
while True:
    GPIO.output(17,1)
    time.sleep(1)
    GPIO.output(17,0)
    time.sleep(1)
GPIO.cleanup()
