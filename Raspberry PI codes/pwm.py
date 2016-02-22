import RPi.GPIO as GPIO
import time 
pin = 7
GPIO.setmode(GPIO.BCM)
GPIO.setup(pin, GPIO.OUT)
p = GPIO.PWM(pin,100)
p.start(0)
try:
	while True:
		for i in range(0, 101, 5):
			p.ChangeDutyCycle(i)
			time.sleep(000.1)
		for i in range(100, -1, -5):
			p.ChangeDutyCycle(i)
			time.sleep(000.1)
except KeyboardIntertupt:
	pass
p.stop()
GPIO.cleanup()
