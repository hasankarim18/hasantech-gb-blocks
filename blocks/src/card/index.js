import { registerBlockType } from "@wordpress/blocks";
import Edit from "./edit";
import "./style.scss";

registerBlockType("gb-up/card", {
  edit: Edit,
  save: () => null, // dynamic block
});
