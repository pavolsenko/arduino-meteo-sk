#include <Wire.h>
#include <SPI.h>
#include <LiquidCrystal.h>

LiquidCrystal lcd(16, 14, 12, 13, 0, 2);

void setup()
{
    lcd.begin(16, 2);
}

void loop()
{
    lcd.setCursor(0, 0);
    lcd.print('Ahoj, svet!');
}
