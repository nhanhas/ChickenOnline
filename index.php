<?php 
//Define Drive FX settings
define("orderNdoc", 1);
define("backendUrl", "https://sis07.drivefx.net/2172d06c/PHCWS/REST");//TODO MUDAR AQUI 
$_SESSION['driveCredentials'] = array(
	userCode=>"admin",
	password=>"12345678",
	applicationType=>"HYU45F-FKEIDD-K93DUJ-ALRNJE",
	company=>""
);

	
//set as global Call HEADER for Drive fX
$ch = curl_init();

//json for test
$inputJson = '
	{
	  "orders": {
	    "Cais Sodr?": [
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Frango simples",
	                                    "price": 8.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Frango c/molho",
	                                    "price": 8.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Frango c/picante",
	                                    "price": 8.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "1/2 Frango simples",
	                                    "price": 4.25,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "1/2 Frango c/molho",
	                                    "price": 4.25,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "1/2 Frango c/picante",
	                                    "price": 4.25,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Coca-cola 1.75L",
	                                    "price": 2.7,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Coca-cola zero 1.75L",
	                                    "price": 2.7,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Coca-cola lata",
	                                    "price": 1.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Coca-cola zero lata",
	                                    "price": 1.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "?gua 0.5L",
	                                    "price": 1.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "?gua 1.5L",
	                                    "price": 2.2,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Ice Tea 1.75L",
	                                    "price": 2.7,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Ice Tea lata",
	                                    "price": 1.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Batata frita pacote (180g)",
	                                    "price": 2.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515604564238,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      }
	    ],
	    "Amadora": [
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "1/2 Frango simples",
	                                    "price": 4.25,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "Churrascaria Borel",
	                        "referencedEnterprisePhone": "99999999999",
	                        "referencedEnterpriseAddress": "dfgdfgdf",
	                        "referencedEnterpriseCity": "dfgdfg",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742442596"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "Churrascaria Borel",
	            "referencedEnterprisePhone": "99999999999",
	            "referencedEnterpriseAddress": "dfgdfgdf",
	            "referencedEnterpriseCity": "dfgdfg",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "Churrascaria Borel",
	            "referencedEnterpriseId": "1512742442596"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 3,
	        "orderId": 390565,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "20:15",
	            "date": "15/12/2017"
	          },
	          {
	            "pagamento": "22",
	            "troco": "?0,75",
	            "quanto": "?21,25"
	          },
	          {
	            "complement": "",
	            "phone": "918547544",
	            "postalCode": "2700-649",
	            "referencePoint": "",
	            "address": "Rua Henrique Paiva Couceiro",
	            "longitude": "-9.217780400000038",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "1B",
	            "latitude": "38.7536627",
	            "city": "Amadora"
	          }
	        ],
	        "orderDate": 1513363905376,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515197182648,
	            "operator": "Jo?o Leite",
	            "orderId": "390565",
	            "key": "FlagDoPedido3"
	          },
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515603727340,
	            "operator": "Jo?o Leite",
	            "orderId": "390565",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "dinheiro",
	        "menuRelation": "family",
	        "title": "Churrasqueira Borel"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "",
	                                    "count": 2,
	                                    "menuRelation": "item",
	                                    "title": "Frango c/molho",
	                                    "price": 8.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "Churrascaria Borel",
	                        "referencedEnterprisePhone": "99999999999",
	                        "referencedEnterpriseAddress": "dfgdfgdf",
	                        "referencedEnterpriseCity": "dfgdfg",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742442596"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "Churrascaria Borel",
	            "referencedEnterprisePhone": "99999999999",
	            "referencedEnterpriseAddress": "dfgdfgdf",
	            "referencedEnterpriseCity": "dfgdfg",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "Churrascaria Borel",
	            "referencedEnterpriseId": "1512742442596"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 3,
	        "orderId": 390565,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "20:15",
	            "date": "15/12/2017"
	          },
	          {
	            "pagamento": "22",
	            "troco": "?0,75",
	            "quanto": "?21,25"
	          },
	          {
	            "complement": "",
	            "phone": "918547544",
	            "postalCode": "2700-649",
	            "referencePoint": "",
	            "address": "Rua Henrique Paiva Couceiro",
	            "longitude": "-9.217780400000038",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "1B",
	            "latitude": "38.7536627",
	            "city": "Amadora"
	          }
	        ],
	        "orderDate": 1513363905376,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515197182648,
	            "operator": "Jo?o Leite",
	            "orderId": "390565",
	            "key": "FlagDoPedido3"
	          },
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515603727340,
	            "operator": "Jo?o Leite",
	            "orderId": "390565",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "dinheiro",
	        "menuRelation": "family",
	        "title": "Churrasqueira Borel"
	      }
	    ]
	  },
	  "action": "GerServerScriptOrders",
	  "version": "1.0.0",
	  "status": "SUCCESS",
	  "statusCode": 1
	}
';

//#1 - Process Json data to prepare an object
$serviceInput = processInputJson($inputJson);

//# - Process JSON function
function processInputJson($json){
	$json = json_decode($json);
	$orders = array();

	//#1 - iterarte object throught Market Places: Cais Sodre, Amadora, etc
	foreach($json->orders as $place){
		//#2 - iterate through a single order
		foreach ($place as $orderItem) {
			print_r($orderItem->orderId . "<br>");
		}

		print_r("_______<br>");	
	}

	//print_r($json->orders);


}



?>