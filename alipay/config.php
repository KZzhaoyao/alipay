<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016080400163850",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEpQIBAAKCAQEAwSZIg4mC/+5KNWP4q3Kaldj0i8TXkCyiP+M96pOXmsJk+VgFrc6uJfyEjJcJ0EsRW6xCNka661ulZwp9y1iK84NsRGw0A+9i4BEpBsZB6/icXVKO402IuwoqjBj8y2tjXIGgDUuag0qybovJ1EzSFLRuW73OyBVv/O26Tgic+dSjGmuux0IITcG8+MxbzaD2AWLeFlgsjDGv8AEHqLcQ+gM9oJjgRjYWligb9Q/XNXtzW86/jlB1lg1Iy+2Grr0FAc6Ss0cBAY0NpYS/CmihV8jkJcclXd7yuhaqZH6k3TRlGnQVrJRbp6D0hA9X26ojMAQhxC8mi8quTuc9zHCMOwIDAQABAoIBAQCf8NCpQ6ybu7ntnjwj1MHXhhFyz+xk8eDlIIp7/f3TZFfy9gW12GjzAbjNJqE0v4S/MdSeV1GfZYOA4Por8cUWQuTbf/JOs+NfgjZD6tZZzcPFr4CtDt5Da/axjlt/IwzjZF+hwtJPGALLcawOxhJMnOCpzXI20zGp8z2MMquyYAV3I+WBN0D58BP09Wt+Nj87/HMAgwLy1qzM/QO9VVhs+rCvqI54pUrWMns596DvxAfFQRbsMlHcVO34L/m8R2BtKQXrXNYdph25cA+Nc+aEHxdggYpKYzsEs+GmXlWEvfE7emzZ5oNkjdvsVafgewQs9ohYVIjcjFlHlGkgrfMhAoGBAPMbi04CutVAu8g9w2/DnKoTrASOlXfZe4+GaDS/as2+1MYAtccbLZm6p8ywNDC8YJzr17ABseXK9lu1PoZK73yokHVTMiz714fkApkqcAYoywxADfvJgasRXt76nKeKwaqlFM2V6U8hz1Y6WCXHjUks4oLi+Yh5MKmG9UJfUdALAoGBAMtkgMZ8K+aosSZf62d0DpBdftn1s1bxkNQ+qVhNyMB0G8/qYDyX+DOXdU1k5Ls+9dQO++Uj0yAqiNT6bXXlKJYRiwxBL0B/aa5/AEI8u8l0czmPcMvR6s4Ab38YzYpzv+0XZGco0+wkrOuuzamwNOzhnKsd7PYr5jK/BYz2UOKRAoGALq4TSZ9skJYleIWjiUpeQqoUVaurN6AjAaQlTjuTHn6ODJcGUHz/fI1CuyL6YoFJa9g9SiaJKj6Wn3Vl1BN/eMhFNMIM2GZjNEyr0w07BXO/yVJjXP2MUHS9asNkYSdbmJCqNe+bJP6w+TWqx1ZR4sMjm05J69KZbXPklCIJa5ECgYEAk/1DqagNtV4Gz5o5SWPreOVeeC7LV7aan6QcSbEHIekZl3W8ojodEUThx/diak/MRIjGhZpEcwIf3397h62+kzqehsMjI3XRqnKj+I4CQPmnITmaY+MQSuWMOtkMLPI9ssAzgM/3Krogy7e70vzv9W/PM76pfRDCBShyXHeYsNECgYEApcpdf4VHFcxz3xuItf90e08b+bP8lKe25oKir5WUfpnM1lB+Hm1cTajvNmzdL8wrJPcPatUKEv98EwN6XCWZuVL0ezVjJlAH/QSrGdjnaBv1m7fXQnBAcDuKLhetKBoUrgCDg4Kmj5W+ZZ+AoeAI6VI+CyVh0cni8EKbJqUOlOs=",
		
		//异步通知地址
		'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDIgHnOn7LLILlKETd6BFRJ0GqgS2Y3mn1wMQmyh9zEyWlz5p1zrahRahbXAfCfSqshSNfqOmAQzSHRVjCqjsAw1jyqrXaPdKBmr90DIpIxmIyKXv4GGAkPyJ/6FTFY99uhpiq0qadD/uSzQsefWo0aTvP/65zi3eof7TcZ32oWpwIDAQAB",
		
	
);