#include <Arduino.h>

// Variáveis globais para armazenar dados
float dados[100];  // Array para armazenar até 100 leituras
int indice = 0;
unsigned long tempoInicio;
unsigned long intervaloMedida = 1000; // Intervalo de 1 segundo (1000 ms)

// Função de configuração
void setup() {
  Serial.begin(9600);  // Inicializa a comunicação serial a 9600 bps
  pinMode(A0, INPUT);  // Configura o pino A0 como entrada para leitura de dados
  tempoInicio = millis();  // Marca o tempo inicial
}

// Função principal que é executada em loop
void loop() {
  unsigned long tempoAtual = millis();

  // Verifica se o intervalo de medida foi atingido
  if (tempoAtual - tempoInicio >= intervaloMedida) {
    // Coleta a leitura de dados
    float leitura = analogRead(A0) * (5.0 / 1023.0); // Exemplo de conversão de leitura analógica

    // Armazena a leitura no array
    dados[indice] = leitura;
    indice++;

    // Reinicia o tempo
    tempoInicio = tempoAtual;

    // Envia a leitura para a porta serial (opcional, para visualização)
    Serial.println(leitura);

    // Se o índice atingir o limite do array, reinicia a coleta (ou trata de outra forma)
    if (indice >= 100) {
      indice = 0;  // Reinicia a contagem, sobrescrevendo as leituras anteriores
    }
  }
}
```