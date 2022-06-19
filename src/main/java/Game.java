import com.fasterxml.jackson.annotation.JsonProperty;

public class Game {
private String date;
private String explanation;
private String media_type;
private String service_version;
private String title;
private String url;

public Game(@JsonProperty("date")String date,
            @JsonProperty("explanation")String explanation,
            @JsonProperty("media_type")String media_type,
            @JsonProperty("service_version")String service_version,
            @JsonProperty("Title")String title,
            @JsonProperty("url")String url) {
    this.date = date;
    this.explanation = explanation;
    this.media_type =media_type;
    this.service_version = service_version;
    this.title = title;
    this.url = url;
}

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getExplanation() {
        return explanation;
    }

    public void setExplanation(String explanation) {
        this.explanation = explanation;
    }

    public String getMedia_type() {
        return media_type;
    }

    public void setMedia_type(String media_type) {
        this.media_type = media_type;
    }

    public String getService_version() {
        return service_version;
    }

    public void setService_version(String service_version) {
        this.service_version = service_version;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getUrl() {
        return url;
    }

    public void setUrl(String url) {
        this.url = url;
    }

    @Override
    public String toString() {
        return "Game\n{" +
                "date= " + date +
                "\n explanation='" + explanation +
                "\n media_type='" + media_type +
                "\n service_version='" + service_version +
                "\n title='" + title +
                "\n url='" + url +
                '}';
    }
}
