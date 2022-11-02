
<h1 align="center"> YouTube_to_m3u </h1>

[![M3U8 generator for YouTube](https://github.com/mastrolive/YouTube_to_m3u/actions/workflows/m3u_Generator.yml/badge.svg)](https://github.com/mastrolive/YouTube_to_m3u/actions/workflows/m3u_Generator.yml)

`https://raw.githubusercontent.com/mastrolive/Stream/Channel.m3u8`

Updated m3u8 links of YouTube live channels, **auto-updated every 3 hours**.


### Add more channels
Edit `channel_info.txt` to add your favourite YouTube livestreams

### Usage
Paste this URL: `https://raw.githubusercontent.com/mastrolive/Stream/Channel.m3u8` to any player which supports M3U8

### Run the tool on your local machine
``` bash
git clone https://github.com/benmoose39/YouTube_to_m3u.git
cd YouTube_to_m3u
chmod +x autorun.sh
./autorun.sh
```

Do not forget to add a cron job set for every 4 hours(or 5) if you plan to run the script locally.
