//This code is for coridor microcontroller.
#include <Ethernet.h>
#include <SPI.h>
#include <Adafruit_GFX.h>    
#include <Adafruit_ST7735.h> 
#define TFT_CS    10
#define TFT_RST   8  
#define TFT_DC    9 
#define TFT_SCLK 13   
#define TFT_MOSI 11   

Adafruit_ST7735 tft = Adafruit_ST7735(TFT_CS,  TFT_DC, TFT_RST);

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };//You can edit this MAC address for other microcontroller with their own.
byte ip[] = { 192, 168, 10, 101 }; //Change this IP to the one you bind to that particular microcontroller during router configuration.
byte server[] = { 192, 168, 10, 100 };

EthernetClient client;

void setup()
{
  Ethernet.begin(mac, ip);
  delay(2000);

  tft.initR(INITR_BLACKTAB);  
  tft.fillScreen(ST7735_BLACK); 
  tft.setTextColor(ST7735_WHITE);
  tft.setTextSize(0);
  tft.setCursor(30,80);
  tft.println("Connecting...");
  delay(1000);

  if (client.connect(server, 80)) 
  {   tft.fillScreen(ST7735_BLACK); 
      tft.setTextColor(ST7735_WHITE);
      tft.setTextSize(0);
      tft.setCursor(50,80);
      tft.println("Welcome");
  }
  else
  {   tft.fillScreen(ST7735_BLACK); 
      tft.setTextColor(ST7735_WHITE);
      tft.setTextSize(0);
      tft.setCursor(10,80);
      tft.println("Connection failed");
      Serial.println("connection failed");
  }
     
}

void loop()
    {
 if (!client.connected()) 
  {   client.connect(server, 80);}
     client.println("GET /website/php_for_arduino/getcoridor.php HTTP/1.0"); //Change getcoridor.php file with another one for other notice board.
                                                                             //eg; getstaffroom.php for notice board of staffroom.
     client.println();
     if (client.available()) {
        String line = client.readString();
        tft.fillScreen(ST7735_BLACK); 
        tft.setTextColor(ST7735_WHITE);
        tft.setTextSize(1);
        tft.setCursor(0,0);
        tft.println(&line[216]);
      }
    delay(2000);
    }
