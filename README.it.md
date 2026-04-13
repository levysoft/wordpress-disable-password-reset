# WordPress Disable Password Reset (Italiano)

Un plugin per WordPress estremamente leggero e senza configurazione per disabilitare completamente la funzionalità di recupero password.

Questo plugin è nato dall'esigenza di bloccare tentativi automatizzati di reset (bot) e risolvere il problema delle email di reset generate da indirizzi IP interni (come 127.0.0.2).

## Caratteristiche

Il plugin applica 4 livelli di protezione:
1. **Blocco Core:** Intercetta e blocca la richiesta di reset lato server.
2. **Pulizia Visuale:** Rimuove il link "Hai perso la password?" dalla schermata di login.
3. **Fallback CSS:** Nasconde il link tramite CSS inline per sicurezza extra.
4. **Reindirizzamento Bot:** Reindirizza istantaneamente qualsiasi accesso diretto al form di recupero verso la pagina di login standard.

## Installazione

Il modo più rapido è usare il file zip già pronto:

1. Vai alla pagina delle [Releases](https://github.com/levysoft/wordpress-disable-password-reset/releases).
2. Scarica il file `wordpress-disable-password-reset.zip`.
3. Nel pannello Admin di WordPress, vai su **Plugin** > **Aggiungi nuovo** > **Carica plugin**.
4. Seleziona il file zip e clicca su **Installa ora**.
5. Attiva il plugin.

## Recupero Password Manuale

Poiché il plugin disabilita l'interfaccia di recupero, se hai bisogno di cambiare password dovrai farlo via database:
1. Apri **phpMyAdmin**.
2. Vai alla tabella `wp_users`.
3. Modifica il tuo utente, seleziona **MD5** per il campo `user_pass` e scrivi la nuova password in chiaro.
4. Salva e accedi normalmente.

## Articoli Correlati
Per approfondire le cause e l'analisi tecnica dietro questo plugin:
* [Articolo su Levysoft.it (Italiano)](https://www.levysoft.it/archivio/2026/04/12/disabilitare-il-reset-password-in-wordpress-cause-analisi-e-soluzione/)
* [Articolo su Medium (Inglese)](https://levysoft.medium.com/disable-password-reset-in-wordpress-causes-analysis-and-solution-f45f51c17cbf)
